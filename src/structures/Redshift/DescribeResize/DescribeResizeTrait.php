<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeResize;

trait DescribeResizeTrait
{
    /**
     * @param DescribeResizeRequest $args
     * @return DescribeResizeResponse
     */
    public function describeResize(DescribeResizeRequest $args)
    {
        $result = parent::describeResize($args->toArray());
        return new DescribeResizeResponse($result->toArray());
    }
}
