<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateFlow;

trait AssociateFlowTrait
{
    /**
     * @param AssociateFlowRequest $args
     * @return AssociateFlowResponse
     */
    public function associateFlow(AssociateFlowRequest $args)
    {
        $result = parent::associateFlow($args->toArray());
        return new AssociateFlowResponse($result->toArray());
    }
}
