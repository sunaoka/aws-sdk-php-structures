<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\CreateBrandProfileAttributes;

trait CreateBrandProfileAttributesTrait
{
    /**
     * @param CreateBrandProfileAttributesRequest $args
     * @return CreateBrandProfileAttributesResponse
     */
    public function createBrandProfileAttributes(CreateBrandProfileAttributesRequest $args)
    {
        $result = parent::createBrandProfileAttributes($args->toArray());
        return new CreateBrandProfileAttributesResponse($result->toArray());
    }
}
