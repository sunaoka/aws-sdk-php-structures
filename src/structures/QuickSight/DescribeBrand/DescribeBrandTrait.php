<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeBrand;

trait DescribeBrandTrait
{
    /**
     * @param DescribeBrandRequest $args
     * @return DescribeBrandResponse
     */
    public function describeBrand(DescribeBrandRequest $args)
    {
        $result = parent::describeBrand($args->toArray());
        return new DescribeBrandResponse($result->toArray());
    }
}
