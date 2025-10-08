<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorSchemas;

trait DescribeFleetAdvisorSchemasTrait
{
    /**
     * @param DescribeFleetAdvisorSchemasRequest $args
     * @return DescribeFleetAdvisorSchemasResponse
     */
    public function describeFleetAdvisorSchemas(DescribeFleetAdvisorSchemasRequest $args)
    {
        $result = parent::describeFleetAdvisorSchemas($args->toArray());
        return new DescribeFleetAdvisorSchemasResponse($result->toArray());
    }
}
