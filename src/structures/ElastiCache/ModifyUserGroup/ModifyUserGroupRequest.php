<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUserGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 * @property list<string> $UserIdsToAdd
 * @property list<string> $UserIdsToRemove
 * @property string $Engine
 */
class ModifyUserGroupRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId: string,
     *     UserIdsToAdd?: list<string>,
     *     UserIdsToRemove?: list<string>,
     *     Engine?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
