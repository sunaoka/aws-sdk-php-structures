<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelChildren;

trait DescribeMetadataModelChildrenTrait
{
    /**
     * @param DescribeMetadataModelChildrenRequest $args
     * @return DescribeMetadataModelChildrenResponse
     */
    public function describeMetadataModelChildren(DescribeMetadataModelChildrenRequest $args)
    {
        $result = parent::describeMetadataModelChildren($args->toArray());
        return new DescribeMetadataModelChildrenResponse($result->toArray());
    }
}
