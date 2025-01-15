<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateUserGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 * @property string $Engine
 * @property list<string>|null $UserIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateUserGroupRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId: string,
     *     Engine: string,
     *     UserIds?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
