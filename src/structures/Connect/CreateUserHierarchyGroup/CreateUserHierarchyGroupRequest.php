<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUserHierarchyGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $ParentGroupId
 * @property string $InstanceId
 * @property array<string, string>|null $Tags
 */
class CreateUserHierarchyGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     ParentGroupId?: string|null,
     *     InstanceId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
