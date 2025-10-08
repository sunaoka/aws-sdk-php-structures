<?php

namespace Sunaoka\Aws\Structures\MediaTailor\DescribeSourceLocation;

trait DescribeSourceLocationTrait
{
    /**
     * @param DescribeSourceLocationRequest $args
     * @return DescribeSourceLocationResponse
     */
    public function describeSourceLocation(DescribeSourceLocationRequest $args)
    {
        $result = parent::describeSourceLocation($args->toArray());
        return new DescribeSourceLocationResponse($result->toArray());
    }
}
