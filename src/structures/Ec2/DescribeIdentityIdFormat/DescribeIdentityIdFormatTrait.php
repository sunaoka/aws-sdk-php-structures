<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIdentityIdFormat;

trait DescribeIdentityIdFormatTrait
{
    /**
     * @param DescribeIdentityIdFormatRequest $args
     * @return DescribeIdentityIdFormatResponse
     */
    public function describeIdentityIdFormat(DescribeIdentityIdFormatRequest $args)
    {
        $result = parent::describeIdentityIdFormat($args->toArray());
        return new DescribeIdentityIdFormatResponse($result->toArray());
    }
}
