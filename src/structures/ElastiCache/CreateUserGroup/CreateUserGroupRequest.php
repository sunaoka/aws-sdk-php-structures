<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUserGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 * @property string $Engine
 * @property list<string> $UserIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateUserGroupRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId: string,
     *     Engine: string,
     *     UserIds?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
