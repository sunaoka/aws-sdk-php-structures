<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetComposition;

trait GetCompositionTrait
{
    /**
     * @param GetCompositionRequest $args
     * @return GetCompositionResponse
     */
    public function getComposition(GetCompositionRequest $args)
    {
        $result = parent::getComposition($args->toArray());
        return new GetCompositionResponse($result->toArray());
    }
}
