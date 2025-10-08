<?php

namespace Sunaoka\Aws\Structures\QuickSight\DeleteBrand;

trait DeleteBrandTrait
{
    /**
     * @param DeleteBrandRequest $args
     * @return DeleteBrandResponse
     */
    public function deleteBrand(DeleteBrandRequest $args)
    {
        $result = parent::deleteBrand($args->toArray());
        return new DeleteBrandResponse($result->toArray());
    }
}
