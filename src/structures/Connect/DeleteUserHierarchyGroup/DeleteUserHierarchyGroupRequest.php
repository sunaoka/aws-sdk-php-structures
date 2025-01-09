<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteUserHierarchyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HierarchyGroupId
 * @property string $InstanceId
 */
class DeleteUserHierarchyGroupRequest extends Request
{
    /**
     * @param array{
     *     HierarchyGroupId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
