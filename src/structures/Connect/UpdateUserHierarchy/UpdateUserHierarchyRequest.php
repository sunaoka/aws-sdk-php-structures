<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HierarchyGroupId
 * @property string $UserId
 * @property string $InstanceId
 */
class UpdateUserHierarchyRequest extends Request
{
    /**
     * @param array{
     *     HierarchyGroupId?: string,
     *     UserId: string,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
