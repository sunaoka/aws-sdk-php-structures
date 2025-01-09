<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HECEndpoint
 * @property 'Raw'|'Event' $HECEndpointType
 * @property string $HECToken
 * @property int $HECAcknowledgmentTimeoutInSeconds
 * @property SplunkRetryOptions $RetryOptions
 * @property 'FailedEventsOnly'|'AllEvents' $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property SplunkBufferingHints $BufferingHints
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class SplunkDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     HECEndpoint: string,
     *     HECEndpointType: 'Raw'|'Event',
     *     HECToken?: string,
     *     HECAcknowledgmentTimeoutInSeconds?: int,
     *     RetryOptions?: SplunkRetryOptions,
     *     S3BackupMode?: 'FailedEventsOnly'|'AllEvents',
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     BufferingHints?: SplunkBufferingHints,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
