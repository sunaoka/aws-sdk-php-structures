<?php

namespace Sunaoka\Aws\Structures\Waf\GetGeoMatchSet;

trait GetGeoMatchSetTrait
{
    /**
     * @param GetGeoMatchSetRequest $args
     * @return GetGeoMatchSetResponse
     */
    public function getGeoMatchSet(GetGeoMatchSetRequest $args)
    {
        $result = parent::getGeoMatchSet($args->toArray());
        return new GetGeoMatchSetResponse($result->toArray());
    }
}
