<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskSets;

trait DescribeTaskSetsTrait
{
    /**
     * @param DescribeTaskSetsRequest $args
     * @return DescribeTaskSetsResponse
     */
    public function describeTaskSets(DescribeTaskSetsRequest $args)
    {
        $result = parent::describeTaskSets($args->toArray());
        return new DescribeTaskSetsResponse($result->toArray());
    }
}
