<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListBrandProfileAttributes;

trait ListBrandProfileAttributesTrait
{
    /**
     * @param ListBrandProfileAttributesRequest $args
     * @return ListBrandProfileAttributesResponse
     */
    public function listBrandProfileAttributes(ListBrandProfileAttributesRequest $args)
    {
        $result = parent::listBrandProfileAttributes($args->toArray());
        return new ListBrandProfileAttributesResponse($result->toArray());
    }
}
