<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStreamSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING' $StreamStatus
 * @property StreamModeDetails|null $StreamModeDetails
 * @property int $RetentionPeriodHours
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 * @property list<EnhancedMetrics> $EnhancedMonitoring
 * @property 'NONE'|'KMS'|null $EncryptionType
 * @property string|null $KeyId
 * @property int<0, 1000000> $OpenShardCount
 * @property int<0, 1000000>|null $ConsumerCount
 * @property int<1024, 10240>|null $MaxRecordSizeInKiB
 */
class StreamDescriptionSummary extends Shape
{
    /**
     * @param array{
     *     StreamName: string,
     *     StreamARN: string,
     *     StreamStatus: 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING',
     *     StreamModeDetails?: StreamModeDetails|null,
     *     RetentionPeriodHours: int,
     *     StreamCreationTimestamp: \Aws\Api\DateTimeResult,
     *     EnhancedMonitoring: list<EnhancedMetrics>,
     *     EncryptionType?: 'NONE'|'KMS'|null,
     *     KeyId?: string|null,
     *     OpenShardCount: int<0, 1000000>,
     *     ConsumerCount?: int<0, 1000000>|null,
     *     MaxRecordSizeInKiB?: int<1024, 10240>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
