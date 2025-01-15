<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamName
 * @property string $StreamARN
 * @property 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING' $StreamStatus
 * @property StreamModeDetails|null $StreamModeDetails
 * @property list<Shard> $Shards
 * @property bool $HasMoreShards
 * @property int $RetentionPeriodHours
 * @property \Aws\Api\DateTimeResult $StreamCreationTimestamp
 * @property list<EnhancedMetrics> $EnhancedMonitoring
 * @property 'NONE'|'KMS'|null $EncryptionType
 * @property string|null $KeyId
 */
class StreamDescription extends Shape
{
    /**
     * @param array{
     *     StreamName: string,
     *     StreamARN: string,
     *     StreamStatus: 'CREATING'|'DELETING'|'ACTIVE'|'UPDATING',
     *     StreamModeDetails?: StreamModeDetails|null,
     *     Shards: list<Shard>,
     *     HasMoreShards: bool,
     *     RetentionPeriodHours: int,
     *     StreamCreationTimestamp: \Aws\Api\DateTimeResult,
     *     EnhancedMonitoring: list<EnhancedMetrics>,
     *     EncryptionType?: 'NONE'|'KMS'|null,
     *     KeyId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
