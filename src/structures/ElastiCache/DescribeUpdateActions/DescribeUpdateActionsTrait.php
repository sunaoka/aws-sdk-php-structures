<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeUpdateActions;

trait DescribeUpdateActionsTrait
{
    /**
     * @param DescribeUpdateActionsRequest $args
     * @return DescribeUpdateActionsResponse
     */
    public function describeUpdateActions(DescribeUpdateActionsRequest $args)
    {
        $result = parent::describeUpdateActions($args->toArray());
        return new DescribeUpdateActionsResponse($result->toArray());
    }
}
