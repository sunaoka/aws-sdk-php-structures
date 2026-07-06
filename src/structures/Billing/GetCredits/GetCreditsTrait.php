<?php

namespace Sunaoka\Aws\Structures\Billing\GetCredits;

trait GetCreditsTrait
{
    /**
     * @param GetCreditsRequest $args
     * @return GetCreditsResponse
     */
    public function getCredits(GetCreditsRequest $args)
    {
        $result = parent::getCredits($args->toArray());
        return new GetCreditsResponse($result->toArray());
    }
}
