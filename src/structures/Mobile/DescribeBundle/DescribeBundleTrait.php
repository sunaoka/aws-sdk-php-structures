<?php

namespace Sunaoka\Aws\Structures\Mobile\DescribeBundle;

trait DescribeBundleTrait
{
    /**
     * @param DescribeBundleRequest $args
     * @return DescribeBundleResponse
     */
    public function describeBundle(DescribeBundleRequest $args)
    {
        $result = parent::describeBundle($args->toArray());
        return new DescribeBundleResponse($result->toArray());
    }
}
