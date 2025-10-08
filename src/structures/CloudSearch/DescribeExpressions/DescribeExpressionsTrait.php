<?php

namespace Sunaoka\Aws\Structures\CloudSearch\DescribeExpressions;

trait DescribeExpressionsTrait
{
    /**
     * @param DescribeExpressionsRequest $args
     * @return DescribeExpressionsResponse
     */
    public function describeExpressions(DescribeExpressionsRequest $args)
    {
        $result = parent::describeExpressions($args->toArray());
        return new DescribeExpressionsResponse($result->toArray());
    }
}
