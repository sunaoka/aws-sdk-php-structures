<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpEndpointConfiguration $EndpointConfiguration
 * @property HttpEndpointBufferingHints|null $BufferingHints
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property HttpEndpointRequestConfiguration|null $RequestConfiguration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string|null $RoleARN
 * @property HttpEndpointRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class HttpEndpointDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     EndpointConfiguration: HttpEndpointConfiguration,
     *     BufferingHints?: HttpEndpointBufferingHints|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     RequestConfiguration?: HttpEndpointRequestConfiguration|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN?: string|null,
     *     RetryOptions?: HttpEndpointRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
