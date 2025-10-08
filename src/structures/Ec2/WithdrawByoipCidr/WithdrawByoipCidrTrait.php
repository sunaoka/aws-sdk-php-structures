<?php

namespace Sunaoka\Aws\Structures\Ec2\WithdrawByoipCidr;

trait WithdrawByoipCidrTrait
{
    /**
     * @param WithdrawByoipCidrRequest $args
     * @return WithdrawByoipCidrResponse
     */
    public function withdrawByoipCidr(WithdrawByoipCidrRequest $args)
    {
        $result = parent::withdrawByoipCidr($args->toArray());
        return new WithdrawByoipCidrResponse($result->toArray());
    }
}
