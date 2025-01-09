<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateUserHierarchyStructure;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\HierarchyStructureUpdate $HierarchyStructure
 * @property string $InstanceId
 */
class UpdateUserHierarchyStructureRequest extends Request
{
    /**
     * @param array{
     *     HierarchyStructure: Shapes\HierarchyStructureUpdate,
     *     InstanceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
