<?php

namespace Sunaoka\Aws\Structures\DirectConnect\AssociateConnectionWithLag;

trait AssociateConnectionWithLagTrait
{
    /**
     * @param AssociateConnectionWithLagRequest $args
     * @return AssociateConnectionWithLagResponse
     */
    public function associateConnectionWithLag(AssociateConnectionWithLagRequest $args)
    {
        $result = parent::associateConnectionWithLag($args->toArray());
        return new AssociateConnectionWithLagResponse($result->toArray());
    }
}
