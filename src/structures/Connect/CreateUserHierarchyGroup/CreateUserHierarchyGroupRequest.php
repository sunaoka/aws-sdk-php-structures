<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUserHierarchyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $ParentGroupId
 * @property string $InstanceId
 * @property array<string, string> $Tags
 */
class CreateUserHierarchyGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ParentGroupId?: string,
     *     InstanceId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
