<?php

namespace Sunaoka\Aws\Structures\Firehose\CreateDeliveryStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HECEndpoint
 * @property 'Raw'|'Event' $HECEndpointType
 * @property string|null $HECToken
 * @property int<180, 600>|null $HECAcknowledgmentTimeoutInSeconds
 * @property SplunkRetryOptions|null $RetryOptions
 * @property 'FailedEventsOnly'|'AllEvents'|null $S3BackupMode
 * @property S3DestinationConfiguration $S3Configuration
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property SplunkBufferingHints|null $BufferingHints
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class SplunkDestinationConfiguration extends Shape
{
    /**
     * @param array{
     *     HECEndpoint: string,
     *     HECEndpointType: 'Raw'|'Event',
     *     HECToken?: string|null,
     *     HECAcknowledgmentTimeoutInSeconds?: int<180, 600>|null,
     *     RetryOptions?: SplunkRetryOptions|null,
     *     S3BackupMode?: 'FailedEventsOnly'|'AllEvents'|null,
     *     S3Configuration: S3DestinationConfiguration,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     BufferingHints?: SplunkBufferingHints|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
