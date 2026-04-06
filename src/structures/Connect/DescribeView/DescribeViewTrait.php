<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeView;

trait DescribeViewTrait
{
    /**
     * @param DescribeViewRequest $args
     * @return DescribeViewResponse
     */
    public function describeView(DescribeViewRequest $args)
    {
        $result = parent::describeView($args->toArray());
        return new DescribeViewResponse($result->toArray());
    }
}
