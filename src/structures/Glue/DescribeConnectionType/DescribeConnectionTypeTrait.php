<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType;

trait DescribeConnectionTypeTrait
{
    /**
     * @param DescribeConnectionTypeRequest $args
     * @return DescribeConnectionTypeResponse
     */
    public function describeConnectionType(DescribeConnectionTypeRequest $args)
    {
        $result = parent::describeConnectionType($args->toArray());
        return new DescribeConnectionTypeResponse($result->toArray());
    }
}
