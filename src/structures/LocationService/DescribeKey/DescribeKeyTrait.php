<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeKey;

trait DescribeKeyTrait
{
    /**
     * @param DescribeKeyRequest $args
     * @return DescribeKeyResponse
     */
    public function describeKey(DescribeKeyRequest $args)
    {
        $result = parent::describeKey($args->toArray());
        return new DescribeKeyResponse($result->toArray());
    }
}
