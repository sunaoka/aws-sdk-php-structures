<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAccountOverview;

trait DescribeAccountOverviewTrait
{
    /**
     * @param DescribeAccountOverviewRequest $args
     * @return DescribeAccountOverviewResponse
     */
    public function describeAccountOverview(DescribeAccountOverviewRequest $args)
    {
        $result = parent::describeAccountOverview($args->toArray());
        return new DescribeAccountOverviewResponse($result->toArray());
    }
}
