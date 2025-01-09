<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CreateTapePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolName
 * @property 'DEEP_ARCHIVE'|'GLACIER' $StorageClass
 * @property 'COMPLIANCE'|'GOVERNANCE'|'NONE' $RetentionLockType
 * @property int<0, 36500> $RetentionLockTimeInDays
 * @property list<Shapes\Tag> $Tags
 */
class CreateTapePoolRequest extends Request
{
    /**
     * @param array{
     *     PoolName: string,
     *     StorageClass: 'DEEP_ARCHIVE'|'GLACIER',
     *     RetentionLockType?: 'COMPLIANCE'|'GOVERNANCE'|'NONE',
     *     RetentionLockTimeInDays?: int<0, 36500>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
