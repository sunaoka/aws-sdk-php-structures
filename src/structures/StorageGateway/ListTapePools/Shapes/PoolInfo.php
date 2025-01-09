<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolARN
 * @property string $PoolName
 * @property 'DEEP_ARCHIVE'|'GLACIER' $StorageClass
 * @property 'COMPLIANCE'|'GOVERNANCE'|'NONE' $RetentionLockType
 * @property int<0, 36500> $RetentionLockTimeInDays
 * @property 'ACTIVE'|'DELETED' $PoolStatus
 */
class PoolInfo extends Shape
{
    /**
     * @param array{
     *     PoolARN?: string,
     *     PoolName?: string,
     *     StorageClass?: 'DEEP_ARCHIVE'|'GLACIER',
     *     RetentionLockType?: 'COMPLIANCE'|'GOVERNANCE'|'NONE',
     *     RetentionLockTimeInDays?: int<0, 36500>,
     *     PoolStatus?: 'ACTIVE'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
