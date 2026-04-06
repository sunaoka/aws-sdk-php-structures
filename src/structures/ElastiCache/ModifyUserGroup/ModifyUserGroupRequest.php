<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyUserGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 * @property list<string>|null $UserIdsToAdd
 * @property list<string>|null $UserIdsToRemove
 */
class ModifyUserGroupRequest extends Request
{
    /**
     * @param array{
     *     UserGroupId: string,
     *     UserIdsToAdd?: list<string>|null,
     *     UserIdsToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
