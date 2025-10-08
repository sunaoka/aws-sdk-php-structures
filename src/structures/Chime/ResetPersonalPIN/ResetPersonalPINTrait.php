<?php

namespace Sunaoka\Aws\Structures\Chime\ResetPersonalPIN;

trait ResetPersonalPINTrait
{
    /**
     * @param ResetPersonalPINRequest $args
     * @return ResetPersonalPINResponse
     */
    public function resetPersonalPIN(ResetPersonalPINRequest $args)
    {
        $result = parent::resetPersonalPIN($args->toArray());
        return new ResetPersonalPINResponse($result->toArray());
    }
}
