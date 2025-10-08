<?php

namespace Sunaoka\Aws\Structures\WafRegional\CreateGeoMatchSet;

trait CreateGeoMatchSetTrait
{
    /**
     * @param CreateGeoMatchSetRequest $args
     * @return CreateGeoMatchSetResponse
     */
    public function createGeoMatchSet(CreateGeoMatchSetRequest $args)
    {
        $result = parent::createGeoMatchSet($args->toArray());
        return new CreateGeoMatchSetResponse($result->toArray());
    }
}
