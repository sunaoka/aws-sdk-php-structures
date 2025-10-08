<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionByoipCidr;

trait ProvisionByoipCidrTrait
{
    /**
     * @param ProvisionByoipCidrRequest $args
     * @return ProvisionByoipCidrResponse
     */
    public function provisionByoipCidr(ProvisionByoipCidrRequest $args)
    {
        $result = parent::provisionByoipCidr($args->toArray());
        return new ProvisionByoipCidrResponse($result->toArray());
    }
}
