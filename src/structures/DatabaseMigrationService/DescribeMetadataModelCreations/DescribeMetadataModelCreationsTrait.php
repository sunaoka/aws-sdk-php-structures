<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeMetadataModelCreations;

trait DescribeMetadataModelCreationsTrait
{
    /**
     * @param DescribeMetadataModelCreationsRequest $args
     * @return DescribeMetadataModelCreationsResponse
     */
    public function describeMetadataModelCreations(DescribeMetadataModelCreationsRequest $args)
    {
        $result = parent::describeMetadataModelCreations($args->toArray());
        return new DescribeMetadataModelCreationsResponse($result->toArray());
    }
}
