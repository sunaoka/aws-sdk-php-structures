<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\GetBrandProfileAttribute;

trait GetBrandProfileAttributeTrait
{
    /**
     * @param GetBrandProfileAttributeRequest $args
     * @return GetBrandProfileAttributeResponse
     */
    public function getBrandProfileAttribute(GetBrandProfileAttributeRequest $args)
    {
        $result = parent::getBrandProfileAttribute($args->toArray());
        return new GetBrandProfileAttributeResponse($result->toArray());
    }
}
