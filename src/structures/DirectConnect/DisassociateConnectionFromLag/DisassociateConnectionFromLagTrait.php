<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DisassociateConnectionFromLag;

trait DisassociateConnectionFromLagTrait
{
    /**
     * @param DisassociateConnectionFromLagRequest $args
     * @return DisassociateConnectionFromLagResponse
     */
    public function disassociateConnectionFromLag(DisassociateConnectionFromLagRequest $args)
    {
        $result = parent::disassociateConnectionFromLag($args->toArray());
        return new DisassociateConnectionFromLagResponse($result->toArray());
    }
}
