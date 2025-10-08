<?php

namespace Sunaoka\Aws\Structures\Macie2\UpdateMacieSession;

trait UpdateMacieSessionTrait
{
    /**
     * @param UpdateMacieSessionRequest $args
     * @return UpdateMacieSessionResponse
     */
    public function updateMacieSession(UpdateMacieSessionRequest $args)
    {
        $result = parent::updateMacieSession($args->toArray());
        return new UpdateMacieSessionResponse($result->toArray());
    }
}
