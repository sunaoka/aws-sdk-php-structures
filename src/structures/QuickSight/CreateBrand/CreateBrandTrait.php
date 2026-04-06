<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateBrand;

trait CreateBrandTrait
{
    /**
     * @param CreateBrandRequest $args
     * @return CreateBrandResponse
     */
    public function createBrand(CreateBrandRequest $args)
    {
        $result = parent::createBrand($args->toArray());
        return new CreateBrandResponse($result->toArray());
    }
}
