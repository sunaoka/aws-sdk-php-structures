<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DeprovisionByoipCidr;

trait DeprovisionByoipCidrTrait
{
    /**
     * @param DeprovisionByoipCidrRequest $args
     * @return DeprovisionByoipCidrResponse
     */
    public function deprovisionByoipCidr(DeprovisionByoipCidrRequest $args)
    {
        $result = parent::deprovisionByoipCidr($args->toArray());
        return new DeprovisionByoipCidrResponse($result->toArray());
    }
}
