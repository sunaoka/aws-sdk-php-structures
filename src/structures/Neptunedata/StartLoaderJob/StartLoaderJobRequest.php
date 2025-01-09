<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartLoaderJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $source
 * @property 'csv'|'opencypher'|'ntriples'|'nquads'|'rdfxml'|'turtle' $format
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'sa-east-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'me-south-1'|'af-south-1'|'ap-east-1'|'ap-northeast-1'|'ap-northeast-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-south-1'|'cn-north-1'|'cn-northwest-1'|'us-gov-west-1'|'us-gov-east-1' $s3BucketRegion
 * @property string $iamRoleArn
 * @property 'RESUME'|'NEW'|'AUTO' $mode
 * @property bool $failOnError
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OVERSUBSCRIBE' $parallelism
 * @property array<string, string> $parserConfiguration
 * @property bool $updateSingleCardinalityProperties
 * @property bool $queueRequest
 * @property list<string> $dependencies
 * @property bool $userProvidedEdgeIds
 */
class StartLoaderJobRequest extends Request
{
    /**
     * @param array{
     *     source: string,
     *     format: 'csv'|'opencypher'|'ntriples'|'nquads'|'rdfxml'|'turtle',
     *     s3BucketRegion: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'sa-east-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'me-south-1'|'af-south-1'|'ap-east-1'|'ap-northeast-1'|'ap-northeast-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-south-1'|'cn-north-1'|'cn-northwest-1'|'us-gov-west-1'|'us-gov-east-1',
     *     iamRoleArn: string,
     *     mode?: 'RESUME'|'NEW'|'AUTO',
     *     failOnError?: bool,
     *     parallelism?: 'LOW'|'MEDIUM'|'HIGH'|'OVERSUBSCRIBE',
     *     parserConfiguration?: array<string, string>,
     *     updateSingleCardinalityProperties?: bool,
     *     queueRequest?: bool,
     *     dependencies?: list<string>,
     *     userProvidedEdgeIds?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
