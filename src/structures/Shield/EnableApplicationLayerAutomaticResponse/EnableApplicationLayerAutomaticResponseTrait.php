<?php

namespace Sunaoka\Aws\Structures\Shield\EnableApplicationLayerAutomaticResponse;

trait EnableApplicationLayerAutomaticResponseTrait
{
    /**
     * @param EnableApplicationLayerAutomaticResponseRequest $args
     * @return EnableApplicationLayerAutomaticResponseResponse
     */
    public function enableApplicationLayerAutomaticResponse(EnableApplicationLayerAutomaticResponseRequest $args)
    {
        $result = parent::enableApplicationLayerAutomaticResponse($args->toArray());
        return new EnableApplicationLayerAutomaticResponseResponse($result->toArray());
    }
}
