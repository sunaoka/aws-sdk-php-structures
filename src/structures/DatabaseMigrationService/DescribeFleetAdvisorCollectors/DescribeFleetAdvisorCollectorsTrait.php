<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorCollectors;

trait DescribeFleetAdvisorCollectorsTrait
{
    /**
     * @param DescribeFleetAdvisorCollectorsRequest $args
     * @return DescribeFleetAdvisorCollectorsResponse
     */
    public function describeFleetAdvisorCollectors(DescribeFleetAdvisorCollectorsRequest $args)
    {
        $result = parent::describeFleetAdvisorCollectors($args->toArray());
        return new DescribeFleetAdvisorCollectorsResponse($result->toArray());
    }
}
