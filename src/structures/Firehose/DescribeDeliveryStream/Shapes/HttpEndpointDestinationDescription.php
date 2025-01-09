<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpEndpointDescription $EndpointConfiguration
 * @property HttpEndpointBufferingHints $BufferingHints
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property HttpEndpointRequestConfiguration $RequestConfiguration
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property string $RoleARN
 * @property HttpEndpointRetryOptions $RetryOptions
 * @property 'FailedDataOnly'|'AllData' $S3BackupMode
 * @property S3DestinationDescription $S3DestinationDescription
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class HttpEndpointDestinationDescription extends Shape
{
    /**
     * @param array{
     *     EndpointConfiguration?: HttpEndpointDescription,
     *     BufferingHints?: HttpEndpointBufferingHints,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     RequestConfiguration?: HttpEndpointRequestConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     RoleARN?: string,
     *     RetryOptions?: HttpEndpointRetryOptions,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData',
     *     S3DestinationDescription?: S3DestinationDescription,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
