<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StartComposition;

trait StartCompositionTrait
{
    /**
     * @param StartCompositionRequest $args
     * @return StartCompositionResponse
     */
    public function startComposition(StartCompositionRequest $args)
    {
        $result = parent::startComposition($args->toArray());
        return new StartCompositionResponse($result->toArray());
    }
}
