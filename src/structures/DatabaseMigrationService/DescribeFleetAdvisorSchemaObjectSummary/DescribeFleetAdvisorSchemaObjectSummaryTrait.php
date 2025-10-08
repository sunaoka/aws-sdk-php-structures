<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemaObjectSummary;

trait DescribeFleetAdvisorSchemaObjectSummaryTrait
{
    /**
     * @param DescribeFleetAdvisorSchemaObjectSummaryRequest $args
     * @return DescribeFleetAdvisorSchemaObjectSummaryResponse
     */
    public function describeFleetAdvisorSchemaObjectSummary(DescribeFleetAdvisorSchemaObjectSummaryRequest $args)
    {
        $result = parent::describeFleetAdvisorSchemaObjectSummary($args->toArray());
        return new DescribeFleetAdvisorSchemaObjectSummaryResponse($result->toArray());
    }
}
