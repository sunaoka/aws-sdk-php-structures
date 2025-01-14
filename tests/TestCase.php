<?php

namespace Tests;

use Aws\AwsClient;
use Aws\MockHandler;
use Aws\Result;

/**
 * @internal
 *
 * @coversNothing
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    use Assert;

    /**
     * @template T of AwsClient
     *
     * @param class-string<T> $client
     *
     * @return T
     */
    protected function createMockClient($client, array $data = [])
    {
        return new $client([
            'credentials' => false,
            'region'      => 'us-east-1',
            'version'     => 'latest',
            'handler'     => $this->getMockHandler($data),
        ]);
    }

    /**
     * @return MockHandler
     */
    protected function getMockHandler(array $data = [])
    {
        $handler = new MockHandler();
        $handler->append(new Result($data));

        return $handler;
    }
}
