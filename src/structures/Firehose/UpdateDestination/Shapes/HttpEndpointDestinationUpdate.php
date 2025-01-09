<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpEndpointConfiguration $EndpointConfiguration
 * @property HttpEndpointBufferingHints $BufferingHints
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property HttpEndpointRequestConfiguration $RequestConfiguration
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property string $RoleARN
 * @property HttpEndpointRetryOptions $RetryOptions
 * @property 'FailedDataOnly'|'AllData' $S3BackupMode
 * @property S3DestinationUpdate $S3Update
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class HttpEndpointDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     EndpointConfiguration?: HttpEndpointConfiguration,
     *     BufferingHints?: HttpEndpointBufferingHints,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     RequestConfiguration?: HttpEndpointRequestConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     RoleARN?: string,
     *     RetryOptions?: HttpEndpointRetryOptions,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData',
     *     S3Update?: S3DestinationUpdate,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
