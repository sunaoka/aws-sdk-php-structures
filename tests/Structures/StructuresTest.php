<?php

namespace Tests\Structures;

use Aws\Batch\BatchClient;
use Aws\S3\S3Client;
use GuzzleHttp\Psr7;
use Psr\Http\Message\StreamInterface;
use Sunaoka\Aws\Structures\Batch\SubmitJob;
use Sunaoka\Aws\Structures\S3\GetObject;
use Sunaoka\Aws\Structures\S3\PutObject;
use Tests\TestCase;

/**
 * @internal
 */
class StructuresTest extends TestCase
{
    /**
     * @return void
     */
    public function testS3GetObject()
    {
        $client = $this->createMockClient(S3Client::class, [
            'Body' => Psr7\Utils::streamFor('body'),
        ]);

        $request = new GetObject\GetObjectRequest([
            'Bucket' => 'bucket',
            'Key'    => 'key',
        ]);

        $result = $client->getObject($request->toArray());

        $response = new GetObject\GetObjectResponse($result->toArray());

        self::assertInstanceOf(StreamInterface::class, $response->Body);
        self::assertSame('body', (string) $response->Body);

        $this->expectExceptionCompat(\InvalidArgumentException::class);

        $response->__get('foo');
    }

    /**
     * @return void
     */
    public function testS3PutObject()
    {
        $client = $this->createMockClient(S3Client::class, [
            'ETag' => '"ETAG"',
        ]);

        $request = new PutObject\PutObjectRequest([
            'Bucket' => 'bucket',
            'Key'    => 'key',
            'Body'   => Psr7\Utils::streamFor('body'),
        ]);

        $result = $client->putObject($request->toArray());

        $response = new PutObject\PutObjectResponse($result->toArray());

        self::assertSame('"ETAG"', $response->ETag);

        $this->expectExceptionCompat(\InvalidArgumentException::class);

        $response->__get('foo');
    }

    /**
     * @return void
     */
    public function testBatchSubmitJob()
    {
        $client = $this->createMockClient(BatchClient::class, [
            'jobArn'  => 'jobArn',
            'jobId'   => 'jobId',
            'jobName' => 'jobName',
        ]);

        $request = new SubmitJob\SubmitJobRequest([
            'jobName'       => 'jobName',
            'jobQueue'      => 'jobQueue',
            'jobDefinition' => 'jobDefinition',
        ]);
        $request->arrayProperties = new SubmitJob\Shapes\ArrayProperties(['size' => 1]);
        $request->dependsOn = [
            new SubmitJob\Shapes\JobDependency([
                'jobId' => 'jobId',
                'type'  => 'SEQUENTIAL',
            ]),
        ];
        $request->parameters = [
            'foo' => 'bar',
            'bar' => 'foo',
        ];

        $result = $client->submitJob($request->toArray());

        $response = new SubmitJob\SubmitJobResponse($result->toArray());

        self::assertSame('jobArn', $response->jobArn);
        self::assertSame('jobId', $response->jobId);
        self::assertSame('jobName', $response->jobName);

        $this->expectExceptionCompat(\InvalidArgumentException::class);

        $response->__get('foo');
    }
}
