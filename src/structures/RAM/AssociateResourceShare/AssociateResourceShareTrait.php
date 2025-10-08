<?php

namespace Sunaoka\Aws\Structures\RAM\AssociateResourceShare;

trait AssociateResourceShareTrait
{
    /**
     * @param AssociateResourceShareRequest $args
     * @return AssociateResourceShareResponse
     */
    public function associateResourceShare(AssociateResourceShareRequest $args)
    {
        $result = parent::associateResourceShare($args->toArray());
        return new AssociateResourceShareResponse($result->toArray());
    }
}
