<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING' $StreamStatus
 * @property StreamModeDetails $StreamModeDetails
 * @property int $RetentionPeriodHours
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 * @property list<EnhancedMetrics> $EnhancedMonitoring
 * @property 'NONE'|'KMS' $EncryptionType
 * @property string $KeyId
 * @property int $OpenShardCount
 * @property int $ConsumerCount
 */
class StreamDescriptionSummary extends Shape
{
    /**
     * @param array{
     *     StreamName: string,
     *     StreamARN: string,
     *     StreamStatus: 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING',
     *     StreamModeDetails?: StreamModeDetails,
     *     RetentionPeriodHours: int,
     *     StreamCreationTimestamp: \Aws\Api\DateTimeResult,
     *     EnhancedMonitoring: list<EnhancedMetrics>,
     *     EncryptionType?: 'NONE'|'KMS',
     *     KeyId?: string,
     *     OpenShardCount: int,
     *     ConsumerCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
