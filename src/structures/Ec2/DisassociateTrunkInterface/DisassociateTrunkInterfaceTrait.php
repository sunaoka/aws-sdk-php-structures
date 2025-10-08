<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTrunkInterface;

trait DisassociateTrunkInterfaceTrait
{
    /**
     * @param DisassociateTrunkInterfaceRequest $args
     * @return DisassociateTrunkInterfaceResponse
     */
    public function disassociateTrunkInterface(DisassociateTrunkInterfaceRequest $args)
    {
        $result = parent::disassociateTrunkInterface($args->toArray());
        return new DisassociateTrunkInterfaceResponse($result->toArray());
    }
}
