<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelImports;

trait DescribeMetadataModelImportsTrait
{
    /**
     * @param DescribeMetadataModelImportsRequest $args
     * @return DescribeMetadataModelImportsResponse
     */
    public function describeMetadataModelImports(DescribeMetadataModelImportsRequest $args)
    {
        $result = parent::describeMetadataModelImports($args->toArray());
        return new DescribeMetadataModelImportsResponse($result->toArray());
    }
}
