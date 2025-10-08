<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeUserHierarchyStructure;

trait DescribeUserHierarchyStructureTrait
{
    /**
     * @param DescribeUserHierarchyStructureRequest $args
     * @return DescribeUserHierarchyStructureResponse
     */
    public function describeUserHierarchyStructure(DescribeUserHierarchyStructureRequest $args)
    {
        $result = parent::describeUserHierarchyStructure($args->toArray());
        return new DescribeUserHierarchyStructureResponse($result->toArray());
    }
}
