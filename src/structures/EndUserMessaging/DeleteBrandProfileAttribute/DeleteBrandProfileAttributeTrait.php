<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\DeleteBrandProfileAttribute;

trait DeleteBrandProfileAttributeTrait
{
    /**
     * @param DeleteBrandProfileAttributeRequest $args
     * @return DeleteBrandProfileAttributeResponse
     */
    public function deleteBrandProfileAttribute(DeleteBrandProfileAttributeRequest $args)
    {
        $result = parent::deleteBrandProfileAttribute($args->toArray());
        return new DeleteBrandProfileAttributeResponse($result->toArray());
    }
}
