<?php

namespace Sunaoka\Aws\Structures\Waf\UpdateGeoMatchSet;

trait UpdateGeoMatchSetTrait
{
    /**
     * @param UpdateGeoMatchSetRequest $args
     * @return UpdateGeoMatchSetResponse
     */
    public function updateGeoMatchSet(UpdateGeoMatchSetRequest $args)
    {
        $result = parent::updateGeoMatchSet($args->toArray());
        return new UpdateGeoMatchSetResponse($result->toArray());
    }
}
