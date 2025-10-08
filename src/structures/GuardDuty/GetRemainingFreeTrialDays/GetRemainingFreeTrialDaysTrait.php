<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetRemainingFreeTrialDays;

trait GetRemainingFreeTrialDaysTrait
{
    /**
     * @param GetRemainingFreeTrialDaysRequest $args
     * @return GetRemainingFreeTrialDaysResponse
     */
    public function getRemainingFreeTrialDays(GetRemainingFreeTrialDaysRequest $args)
    {
        $result = parent::getRemainingFreeTrialDays($args->toArray());
        return new GetRemainingFreeTrialDaysResponse($result->toArray());
    }
}
