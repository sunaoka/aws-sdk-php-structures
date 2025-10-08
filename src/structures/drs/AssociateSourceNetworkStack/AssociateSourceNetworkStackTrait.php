<?php

namespace Sunaoka\Aws\Structures\drs\AssociateSourceNetworkStack;

trait AssociateSourceNetworkStackTrait
{
    /**
     * @param AssociateSourceNetworkStackRequest $args
     * @return AssociateSourceNetworkStackResponse
     */
    public function associateSourceNetworkStack(AssociateSourceNetworkStackRequest $args)
    {
        $result = parent::associateSourceNetworkStack($args->toArray());
        return new AssociateSourceNetworkStackResponse($result->toArray());
    }
}
