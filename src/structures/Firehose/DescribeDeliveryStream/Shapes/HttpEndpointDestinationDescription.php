<?php

namespace Sunaoka\Aws\Structures\Firehose\DescribeDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpEndpointDescription|null $EndpointConfiguration
 * @property HttpEndpointBufferingHints|null $BufferingHints
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property HttpEndpointRequestConfiguration|null $RequestConfiguration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property string|null $RoleARN
 * @property HttpEndpointRetryOptions|null $RetryOptions
 * @property 'FailedDataOnly'|'AllData'|null $S3BackupMode
 * @property S3DestinationDescription|null $S3DestinationDescription
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class HttpEndpointDestinationDescription extends Shape
{
    /**
     * @param array{
     *     EndpointConfiguration?: HttpEndpointDescription|null,
     *     BufferingHints?: HttpEndpointBufferingHints|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     RequestConfiguration?: HttpEndpointRequestConfiguration|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     RoleARN?: string|null,
     *     RetryOptions?: HttpEndpointRetryOptions|null,
     *     S3BackupMode?: 'FailedDataOnly'|'AllData'|null,
     *     S3DestinationDescription?: S3DestinationDescription|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
