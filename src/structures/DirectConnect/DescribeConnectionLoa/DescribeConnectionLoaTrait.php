<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeConnectionLoa;

trait DescribeConnectionLoaTrait
{
    /**
     * @param DescribeConnectionLoaRequest $args
     * @return DescribeConnectionLoaResponse
     */
    public function describeConnectionLoa(DescribeConnectionLoaRequest $args)
    {
        $result = parent::describeConnectionLoa($args->toArray());
        return new DescribeConnectionLoaResponse($result->toArray());
    }
}
