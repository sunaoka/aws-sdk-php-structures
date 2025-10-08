<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetAccessControlEffect;

trait GetAccessControlEffectTrait
{
    /**
     * @param GetAccessControlEffectRequest $args
     * @return GetAccessControlEffectResponse
     */
    public function getAccessControlEffect(GetAccessControlEffectRequest $args)
    {
        $result = parent::getAccessControlEffect($args->toArray());
        return new GetAccessControlEffectResponse($result->toArray());
    }
}
