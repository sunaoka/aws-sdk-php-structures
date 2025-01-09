<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteUserGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserGroupId
 */
class DeleteUserGroupRequest extends Request
{
    /**
     * @param array{UserGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
