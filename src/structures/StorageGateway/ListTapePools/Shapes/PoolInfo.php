<?php

namespace Sunaoka\Aws\Structures\StorageGateway\ListTapePools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolARN
 * @property string|null $PoolName
 * @property 'DEEP_ARCHIVE'|'GLACIER'|null $StorageClass
 * @property 'COMPLIANCE'|'GOVERNANCE'|'NONE'|null $RetentionLockType
 * @property int<0, 36500>|null $RetentionLockTimeInDays
 * @property 'ACTIVE'|'DELETED'|null $PoolStatus
 */
class PoolInfo extends Shape
{
    /**
     * @param array{
     *     PoolARN?: string|null,
     *     PoolName?: string|null,
     *     StorageClass?: 'DEEP_ARCHIVE'|'GLACIER'|null,
     *     RetentionLockType?: 'COMPLIANCE'|'GOVERNANCE'|'NONE'|null,
     *     RetentionLockTimeInDays?: int<0, 36500>|null,
     *     PoolStatus?: 'ACTIVE'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
