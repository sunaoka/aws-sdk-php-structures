<?php

namespace Sunaoka\Aws\Structures\Macie2\GetMacieSession;

trait GetMacieSessionTrait
{
    /**
     * @param GetMacieSessionRequest $args
     * @return GetMacieSessionResponse
     */
    public function getMacieSession(GetMacieSessionRequest $args)
    {
        $result = parent::getMacieSession($args->toArray());
        return new GetMacieSessionResponse($result->toArray());
    }
}
