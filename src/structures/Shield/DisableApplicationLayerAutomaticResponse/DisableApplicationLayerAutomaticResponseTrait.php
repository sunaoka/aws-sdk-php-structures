<?php

namespace Sunaoka\Aws\Structures\Shield\DisableApplicationLayerAutomaticResponse;

trait DisableApplicationLayerAutomaticResponseTrait
{
    /**
     * @param DisableApplicationLayerAutomaticResponseRequest $args
     * @return DisableApplicationLayerAutomaticResponseResponse
     */
    public function disableApplicationLayerAutomaticResponse(DisableApplicationLayerAutomaticResponseRequest $args)
    {
        $result = parent::disableApplicationLayerAutomaticResponse($args->toArray());
        return new DisableApplicationLayerAutomaticResponseResponse($result->toArray());
    }
}
