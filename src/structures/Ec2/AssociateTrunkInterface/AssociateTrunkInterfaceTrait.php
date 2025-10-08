<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTrunkInterface;

trait AssociateTrunkInterfaceTrait
{
    /**
     * @param AssociateTrunkInterfaceRequest $args
     * @return AssociateTrunkInterfaceResponse
     */
    public function associateTrunkInterface(AssociateTrunkInterfaceRequest $args)
    {
        $result = parent::associateTrunkInterface($args->toArray());
        return new AssociateTrunkInterfaceResponse($result->toArray());
    }
}
