<?php

namespace Sunaoka\Aws\Structures\Iot\DetachThingPrincipal;

trait DetachThingPrincipalTrait
{
    /**
     * @param DetachThingPrincipalRequest $args
     * @return DetachThingPrincipalResponse
     */
    public function detachThingPrincipal(DetachThingPrincipalRequest $args)
    {
        $result = parent::detachThingPrincipal($args->toArray());
        return new DetachThingPrincipalResponse($result->toArray());
    }
}
