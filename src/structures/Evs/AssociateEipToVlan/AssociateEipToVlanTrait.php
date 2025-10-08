<?php

namespace Sunaoka\Aws\Structures\Evs\AssociateEipToVlan;

trait AssociateEipToVlanTrait
{
    /**
     * @param AssociateEipToVlanRequest $args
     * @return AssociateEipToVlanResponse
     */
    public function associateEipToVlan(AssociateEipToVlanRequest $args)
    {
        $result = parent::associateEipToVlan($args->toArray());
        return new AssociateEipToVlanResponse($result->toArray());
    }
}
