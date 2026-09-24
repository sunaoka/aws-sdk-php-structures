<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupIdSuffix
 * @property string|null $GlobalReplicationGroupDescription
 * @property string $PrimaryReplicationGroupId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupIdSuffix: string,
     *     GlobalReplicationGroupDescription?: string|null,
     *     PrimaryReplicationGroupId: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
