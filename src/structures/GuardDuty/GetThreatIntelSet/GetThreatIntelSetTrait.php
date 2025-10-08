<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetThreatIntelSet;

trait GetThreatIntelSetTrait
{
    /**
     * @param GetThreatIntelSetRequest $args
     * @return GetThreatIntelSetResponse
     */
    public function getThreatIntelSet(GetThreatIntelSetRequest $args)
    {
        $result = parent::getThreatIntelSet($args->toArray());
        return new GetThreatIntelSetResponse($result->toArray());
    }
}
