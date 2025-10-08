<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccountSummary;

trait GetAccountSummaryTrait
{
    /**
     * @return GetAccountSummaryResponse
     */
    public function getAccountSummary()
    {
        $result = parent::getAccountSummary();
        return new GetAccountSummaryResponse($result->toArray());
    }
}
