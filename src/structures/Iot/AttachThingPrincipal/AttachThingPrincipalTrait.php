<?php

namespace Sunaoka\Aws\Structures\Iot\AttachThingPrincipal;

trait AttachThingPrincipalTrait
{
    /**
     * @param AttachThingPrincipalRequest $args
     * @return AttachThingPrincipalResponse
     */
    public function attachThingPrincipal(AttachThingPrincipalRequest $args)
    {
        $result = parent::attachThingPrincipal($args->toArray());
        return new AttachThingPrincipalResponse($result->toArray());
    }
}
