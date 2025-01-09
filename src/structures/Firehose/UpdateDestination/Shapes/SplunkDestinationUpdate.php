<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HECEndpoint
 * @property 'Raw'|'Event' $HECEndpointType
 * @property string $HECToken
 * @property int<180, 600> $HECAcknowledgmentTimeoutInSeconds
 * @property SplunkRetryOptions $RetryOptions
 * @property 'FailedEventsOnly'|'AllEvents' $S3BackupMode
 * @property S3DestinationUpdate $S3Update
 * @property ProcessingConfiguration $ProcessingConfiguration
 * @property CloudWatchLoggingOptions $CloudWatchLoggingOptions
 * @property SplunkBufferingHints $BufferingHints
 * @property SecretsManagerConfiguration $SecretsManagerConfiguration
 */
class SplunkDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     HECEndpoint?: string,
     *     HECEndpointType?: 'Raw'|'Event',
     *     HECToken?: string,
     *     HECAcknowledgmentTimeoutInSeconds?: int<180, 600>,
     *     RetryOptions?: SplunkRetryOptions,
     *     S3BackupMode?: 'FailedEventsOnly'|'AllEvents',
     *     S3Update?: S3DestinationUpdate,
     *     ProcessingConfiguration?: ProcessingConfiguration,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions,
     *     BufferingHints?: SplunkBufferingHints,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
