<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpEndpointConfiguration|null $EndpointConfiguration
 * @property HttpEndpointBufferingHints|null $BufferingHints
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property HttpEndpointRequestConfiguration|null $RequestConfiguration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string|null $RoleARN
 * @property HttpEndpointRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationUpdate|null $S3Update
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class HttpEndpointDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     EndpointConfiguration?: HttpEndpointConfiguration|null,
     *     BufferingHints?: HttpEndpointBufferingHints|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     RequestConfiguration?: HttpEndpointRequestConfiguration|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN?: string|null,
     *     RetryOptions?: HttpEndpointRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
