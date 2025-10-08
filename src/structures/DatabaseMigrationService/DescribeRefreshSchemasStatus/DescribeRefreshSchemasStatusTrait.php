<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeRefreshSchemasStatus;

trait DescribeRefreshSchemasStatusTrait
{
    /**
     * @param DescribeRefreshSchemasStatusRequest $args
     * @return DescribeRefreshSchemasStatusResponse
     */
    public function describeRefreshSchemasStatus(DescribeRefreshSchemasStatusRequest $args)
    {
        $result = parent::describeRefreshSchemasStatus($args->toArray());
        return new DescribeRefreshSchemasStatusResponse($result->toArray());
    }
}
