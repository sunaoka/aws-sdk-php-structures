<?php

namespace Sunaoka\Aws\Structures\MPA\CancelSession;

trait CancelSessionTrait
{
    /**
     * @param CancelSessionRequest $args
     * @return CancelSessionResponse
     */
    public function cancelSession(CancelSessionRequest $args)
    {
        $result = parent::cancelSession($args->toArray());
        return new CancelSessionResponse($result->toArray());
    }
}
