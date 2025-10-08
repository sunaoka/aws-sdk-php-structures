<?php

namespace Sunaoka\Aws\Structures\Evs\DisassociateEipFromVlan;

trait DisassociateEipFromVlanTrait
{
    /**
     * @param DisassociateEipFromVlanRequest $args
     * @return DisassociateEipFromVlanResponse
     */
    public function disassociateEipFromVlan(DisassociateEipFromVlanRequest $args)
    {
        $result = parent::disassociateEipFromVlan($args->toArray());
        return new DisassociateEipFromVlanResponse($result->toArray());
    }
}
