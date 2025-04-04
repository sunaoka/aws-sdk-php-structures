<?php

namespace Sunaoka\Aws\Structures\Firehose\UpdateDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HECEndpoint
 * @property 'Raw'|'Event'|null $HECEndpointType
 * @property string|null $HECToken
 * @property int<180, 600>|null $HECAcknowledgmentTimeoutInSeconds
 * @property SplunkRetryOptions|null $RetryOptions
 * @property 'FailedEventsOnly'|'AllEvents'|null $S3BackupMode
 * @property S3DestinationUpdate|null $S3Update
 * @property ProcessingConfiguration|null $ProcessingConfiguration
 * @property CloudWatchLoggingOptions|null $CloudWatchLoggingOptions
 * @property SplunkBufferingHints|null $BufferingHints
 * @property SecretsManagerConfiguration|null $SecretsManagerConfiguration
 */
class SplunkDestinationUpdate extends Shape
{
    /**
     * @param array{
     *     HECEndpoint?: string|null,
     *     HECEndpointType?: 'Raw'|'Event'|null,
     *     HECToken?: string|null,
     *     HECAcknowledgmentTimeoutInSeconds?: int<180, 600>|null,
     *     RetryOptions?: SplunkRetryOptions|null,
     *     S3BackupMode?: 'FailedEventsOnly'|'AllEvents'|null,
     *     S3Update?: S3DestinationUpdate|null,
     *     ProcessingConfiguration?: ProcessingConfiguration|null,
     *     CloudWatchLoggingOptions?: CloudWatchLoggingOptions|null,
     *     BufferingHints?: SplunkBufferingHints|null,
     *     SecretsManagerConfiguration?: SecretsManagerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
