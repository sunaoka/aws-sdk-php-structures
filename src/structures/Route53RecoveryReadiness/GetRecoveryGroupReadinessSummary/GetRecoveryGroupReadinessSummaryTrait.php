<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetRecoveryGroupReadinessSummary;

trait GetRecoveryGroupReadinessSummaryTrait
{
    /**
     * @param GetRecoveryGroupReadinessSummaryRequest $args
     * @return GetRecoveryGroupReadinessSummaryResponse
     */
    public function getRecoveryGroupReadinessSummary(GetRecoveryGroupReadinessSummaryRequest $args)
    {
        $result = parent::getRecoveryGroupReadinessSummary($args->toArray());
        return new GetRecoveryGroupReadinessSummaryResponse($result->toArray());
    }
}
