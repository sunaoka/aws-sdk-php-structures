<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeAnomaly;

trait DescribeAnomalyTrait
{
    /**
     * @param DescribeAnomalyRequest $args
     * @return DescribeAnomalyResponse
     */
    public function describeAnomaly(DescribeAnomalyRequest $args)
    {
        $result = parent::describeAnomaly($args->toArray());
        return new DescribeAnomalyResponse($result->toArray());
    }
}
