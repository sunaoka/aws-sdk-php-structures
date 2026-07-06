<?php

namespace Sunaoka\Aws\Structures\Billing\RedeemCredits;

trait RedeemCreditsTrait
{
    /**
     * @param RedeemCreditsRequest $args
     * @return RedeemCreditsResponse
     */
    public function redeemCredits(RedeemCreditsRequest $args)
    {
        $result = parent::redeemCredits($args->toArray());
        return new RedeemCreditsResponse($result->toArray());
    }
}
