<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE'|null $StorageType
 * @property string|null $Location
 * @property 'AUDIO'|'VIDEO'|null $MediaStreamType
 * @property 'ALL'|'MANAGER'|'AGENT'|'CUSTOMER'|'THIRDPARTY'|null $ParticipantType
 * @property string|null $FragmentStartNumber
 * @property string|null $FragmentStopNumber
 * @property \Aws\Api\DateTimeResult|null $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $StopTimestamp
 * @property 'AVAILABLE'|'DELETED'|null $Status
 * @property string|null $DeletionReason
 */
class RecordingInfo extends Shape
{
    /**
     * @param array{
     *     StorageType?: 'S3'|'KINESIS_VIDEO_STREAM'|'KINESIS_STREAM'|'KINESIS_FIREHOSE'|null,
     *     Location?: string|null,
     *     MediaStreamType?: 'AUDIO'|'VIDEO'|null,
     *     ParticipantType?: 'ALL'|'MANAGER'|'AGENT'|'CUSTOMER'|'THIRDPARTY'|null,
     *     FragmentStartNumber?: string|null,
     *     FragmentStopNumber?: string|null,
     *     StartTimestamp?: \Aws\Api\DateTimeResult|null,
     *     StopTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'AVAILABLE'|'DELETED'|null,
     *     DeletionReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
