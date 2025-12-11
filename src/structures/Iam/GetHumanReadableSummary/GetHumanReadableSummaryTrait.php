<?php

namespace Sunaoka\Aws\Structures\Iam\GetHumanReadableSummary;

trait GetHumanReadableSummaryTrait
{
    /**
     * @param GetHumanReadableSummaryRequest $args
     * @return GetHumanReadableSummaryResponse
     */
    public function getHumanReadableSummary(GetHumanReadableSummaryRequest $args)
    {
        $result = parent::getHumanReadableSummary($args->toArray());
        return new GetHumanReadableSummaryResponse($result->toArray());
    }
}
