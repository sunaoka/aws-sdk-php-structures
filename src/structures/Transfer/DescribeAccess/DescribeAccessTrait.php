<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAccess;

trait DescribeAccessTrait
{
    /**
     * @param DescribeAccessRequest $args
     * @return DescribeAccessResponse
     */
    public function describeAccess(DescribeAccessRequest $args)
    {
        $result = parent::describeAccess($args->toArray());
        return new DescribeAccessResponse($result->toArray());
    }
}
