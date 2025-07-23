<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartLoaderJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $source
 * @property 'csv'|'opencypher'|'ntriples'|'nquads'|'rdfxml'|'turtle' $format
 * @property 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'sa-east-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'me-south-1'|'af-south-1'|'ap-east-1'|'ap-northeast-1'|'ap-northeast-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-south-1'|'cn-north-1'|'cn-northwest-1'|'us-gov-west-1'|'us-gov-east-1'|'ca-west-1'|'eu-south-2'|'il-central-1'|'me-central-1'|'ap-northeast-3'|'ap-southeast-3'|'ap-southeast-4'|'ap-southeast-5'|'ap-southeast-7'|'mx-central-1'|'ap-east-2'|'ap-south-2'|'eu-central-2' $s3BucketRegion
 * @property string $iamRoleArn
 * @property 'RESUME'|'NEW'|'AUTO'|null $mode
 * @property bool|null $failOnError
 * @property 'LOW'|'MEDIUM'|'HIGH'|'OVERSUBSCRIBE'|null $parallelism
 * @property array<string, string>|null $parserConfiguration
 * @property bool|null $updateSingleCardinalityProperties
 * @property bool|null $queueRequest
 * @property list<string>|null $dependencies
 * @property bool|null $userProvidedEdgeIds
 */
class StartLoaderJobRequest extends Request
{
    /**
     * @param array{
     *     source: string,
     *     format: 'csv'|'opencypher'|'ntriples'|'nquads'|'rdfxml'|'turtle',
     *     s3BucketRegion: 'us-east-1'|'us-east-2'|'us-west-1'|'us-west-2'|'ca-central-1'|'sa-east-1'|'eu-north-1'|'eu-west-1'|'eu-west-2'|'eu-west-3'|'eu-central-1'|'me-south-1'|'af-south-1'|'ap-east-1'|'ap-northeast-1'|'ap-northeast-2'|'ap-southeast-1'|'ap-southeast-2'|'ap-south-1'|'cn-north-1'|'cn-northwest-1'|'us-gov-west-1'|'us-gov-east-1'|'ca-west-1'|'eu-south-2'|'il-central-1'|'me-central-1'|'ap-northeast-3'|'ap-southeast-3'|'ap-southeast-4'|'ap-southeast-5'|'ap-southeast-7'|'mx-central-1'|'ap-east-2'|'ap-south-2'|'eu-central-2',
     *     iamRoleArn: string,
     *     mode?: 'RESUME'|'NEW'|'AUTO'|null,
     *     failOnError?: bool|null,
     *     parallelism?: 'LOW'|'MEDIUM'|'HIGH'|'OVERSUBSCRIBE'|null,
     *     parserConfiguration?: array<string, string>|null,
     *     updateSingleCardinalityProperties?: bool|null,
     *     queueRequest?: bool|null,
     *     dependencies?: list<string>|null,
     *     userProvidedEdgeIds?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
