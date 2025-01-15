<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property 'DEEP_ARCHIVE'|'GLACIER' $StorageClass
 * @property 'COMPLIANCE'|'GOVERNANCE'|'NONE'|null $RetentionLockType
 * @property int<0, 36500>|null $RetentionLockTimeInDays
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateTapePoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     StorageClass: 'DEEP_ARCHIVE'|'GLACIER',
     *     RetentionLockType?: 'COMPLIANCE'|'GOVERNANCE'|'NONE'|null,
     *     RetentionLockTimeInDays?: int<0, 36500>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
