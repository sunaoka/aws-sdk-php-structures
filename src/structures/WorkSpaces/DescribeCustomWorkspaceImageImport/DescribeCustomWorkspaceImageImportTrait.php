<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\DescribeCustomWorkspaceImageImport;

trait DescribeCustomWorkspaceImageImportTrait
{
    /**
     * @param DescribeCustomWorkspaceImageImportRequest $args
     * @return DescribeCustomWorkspaceImageImportResponse
     */
    public function describeCustomWorkspaceImageImport(DescribeCustomWorkspaceImageImportRequest $args)
    {
        $result = parent::describeCustomWorkspaceImageImport($args->toArray());
        return new DescribeCustomWorkspaceImageImportResponse($result->toArray());
    }
}
