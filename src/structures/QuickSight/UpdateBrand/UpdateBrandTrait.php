<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateBrand;

trait UpdateBrandTrait
{
    /**
     * @param UpdateBrandRequest $args
     * @return UpdateBrandResponse
     */
    public function updateBrand(UpdateBrandRequest $args)
    {
        $result = parent::updateBrand($args->toArray());
        return new UpdateBrandResponse($result->toArray());
    }
}
