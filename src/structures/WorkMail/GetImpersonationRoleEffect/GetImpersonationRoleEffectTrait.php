<?php

namespace Sunaoka\Aws\Structures\WorkMail\GetImpersonationRoleEffect;

trait GetImpersonationRoleEffectTrait
{
    /**
     * @param GetImpersonationRoleEffectRequest $args
     * @return GetImpersonationRoleEffectResponse
     */
    public function getImpersonationRoleEffect(GetImpersonationRoleEffectRequest $args)
    {
        $result = parent::getImpersonationRoleEffect($args->toArray());
        return new GetImpersonationRoleEffectResponse($result->toArray());
    }
}
