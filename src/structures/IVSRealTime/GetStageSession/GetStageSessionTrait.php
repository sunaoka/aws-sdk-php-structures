<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStageSession;

trait GetStageSessionTrait
{
    /**
     * @param GetStageSessionRequest $args
     * @return GetStageSessionResponse
     */
    public function getStageSession(GetStageSessionRequest $args)
    {
        $result = parent::getStageSession($args->toArray());
        return new GetStageSessionResponse($result->toArray());
    }
}
