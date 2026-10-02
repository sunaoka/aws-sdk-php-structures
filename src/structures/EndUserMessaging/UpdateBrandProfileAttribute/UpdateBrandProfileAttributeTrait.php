<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\UpdateBrandProfileAttribute;

trait UpdateBrandProfileAttributeTrait
{
    /**
     * @param UpdateBrandProfileAttributeRequest $args
     * @return UpdateBrandProfileAttributeResponse
     */
    public function updateBrandProfileAttribute(UpdateBrandProfileAttributeRequest $args)
    {
        $result = parent::updateBrandProfileAttribute($args->toArray());
        return new UpdateBrandProfileAttributeResponse($result->toArray());
    }
}
