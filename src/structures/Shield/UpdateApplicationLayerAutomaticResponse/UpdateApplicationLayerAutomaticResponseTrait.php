<?php

namespace Sunaoka\Aws\Structures\Shield\UpdateApplicationLayerAutomaticResponse;

trait UpdateApplicationLayerAutomaticResponseTrait
{
    /**
     * @param UpdateApplicationLayerAutomaticResponseRequest $args
     * @return UpdateApplicationLayerAutomaticResponseResponse
     */
    public function updateApplicationLayerAutomaticResponse(UpdateApplicationLayerAutomaticResponseRequest $args)
    {
        $result = parent::updateApplicationLayerAutomaticResponse($args->toArray());
        return new UpdateApplicationLayerAutomaticResponseResponse($result->toArray());
    }
}
