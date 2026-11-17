<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\PutTimeOffBalance;

trait PutTimeOffBalanceTrait
{
    /**
     * @param PutTimeOffBalanceRequest $args
     * @return PutTimeOffBalanceResponse
     */
    public function putTimeOffBalance(PutTimeOffBalanceRequest $args)
    {
        $result = parent::putTimeOffBalance($args->toArray());
        return new PutTimeOffBalanceResponse($result->toArray());
    }
}
