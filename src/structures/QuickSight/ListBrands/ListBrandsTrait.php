<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListBrands;

trait ListBrandsTrait
{
    /**
     * @param ListBrandsRequest $args
     * @return ListBrandsResponse
     */
    public function listBrands(ListBrandsRequest $args)
    {
        $result = parent::listBrands($args->toArray());
        return new ListBrandsResponse($result->toArray());
    }
}
