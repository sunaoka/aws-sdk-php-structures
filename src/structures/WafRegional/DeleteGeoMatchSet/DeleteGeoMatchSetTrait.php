<?php

namespace Sunaoka\Aws\Structures\WafRegional\DeleteGeoMatchSet;

trait DeleteGeoMatchSetTrait
{
    /**
     * @param DeleteGeoMatchSetRequest $args
     * @return DeleteGeoMatchSetResponse
     */
    public function deleteGeoMatchSet(DeleteGeoMatchSetRequest $args)
    {
        $result = parent::deleteGeoMatchSet($args->toArray());
        return new DeleteGeoMatchSetResponse($result->toArray());
    }
}
