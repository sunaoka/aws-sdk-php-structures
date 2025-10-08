<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DescribeProductsV2;

trait DescribeProductsV2Trait
{
    /**
     * @param DescribeProductsV2Request $args
     * @return DescribeProductsV2Response
     */
    public function describeProductsV2(DescribeProductsV2Request $args)
    {
        $result = parent::describeProductsV2($args->toArray());
        return new DescribeProductsV2Response($result->toArray());
    }
}
