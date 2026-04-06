<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\StopComposition;

trait StopCompositionTrait
{
    /**
     * @param StopCompositionRequest $args
     * @return StopCompositionResponse
     */
    public function stopComposition(StopCompositionRequest $args)
    {
        $result = parent::stopComposition($args->toArray());
        return new StopCompositionResponse($result->toArray());
    }
}
