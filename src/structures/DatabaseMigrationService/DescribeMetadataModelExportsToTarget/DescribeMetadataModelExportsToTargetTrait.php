<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelExportsToTarget;

trait DescribeMetadataModelExportsToTargetTrait
{
    /**
     * @param DescribeMetadataModelExportsToTargetRequest $args
     * @return DescribeMetadataModelExportsToTargetResponse
     */
    public function describeMetadataModelExportsToTarget(DescribeMetadataModelExportsToTargetRequest $args)
    {
        $result = parent::describeMetadataModelExportsToTarget($args->toArray());
        return new DescribeMetadataModelExportsToTargetResponse($result->toArray());
    }
}
