<?php

namespace Sunaoka\Aws\Structures\Route53RecoveryReadiness\GetCellReadinessSummary;

trait GetCellReadinessSummaryTrait
{
    /**
     * @param GetCellReadinessSummaryRequest $args
     * @return GetCellReadinessSummaryResponse
     */
    public function getCellReadinessSummary(GetCellReadinessSummaryRequest $args)
    {
        $result = parent::getCellReadinessSummary($args->toArray());
        return new GetCellReadinessSummaryResponse($result->toArray());
    }
}
