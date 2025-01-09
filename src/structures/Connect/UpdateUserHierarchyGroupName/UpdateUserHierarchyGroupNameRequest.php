<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyGroupName;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $HierarchyGroupId
 * @property string $InstanceId
 */
class UpdateUserHierarchyGroupNameRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     HierarchyGroupId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
