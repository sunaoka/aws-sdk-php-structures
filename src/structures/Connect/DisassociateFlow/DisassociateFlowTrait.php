<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateFlow;

trait DisassociateFlowTrait
{
    /**
     * @param DisassociateFlowRequest $args
     * @return DisassociateFlowResponse
     */
    public function disassociateFlow(DisassociateFlowRequest $args)
    {
        $result = parent::disassociateFlow($args->toArray());
        return new DisassociateFlowResponse($result->toArray());
    }
}
