<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdFormat;

trait DescribeIdFormatTrait
{
    /**
     * @param DescribeIdFormatRequest $args
     * @return DescribeIdFormatResponse
     */
    public function describeIdFormat(DescribeIdFormatRequest $args)
    {
        $result = parent::describeIdFormat($args->toArray());
        return new DescribeIdFormatResponse($result->toArray());
    }
}
