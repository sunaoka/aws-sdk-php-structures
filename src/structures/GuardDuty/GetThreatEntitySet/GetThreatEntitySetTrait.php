<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetThreatEntitySet;

trait GetThreatEntitySetTrait
{
    /**
     * @param GetThreatEntitySetRequest $args
     * @return GetThreatEntitySetResponse
     */
    public function getThreatEntitySet(GetThreatEntitySetRequest $args)
    {
        $result = parent::getThreatEntitySet($args->toArray());
        return new GetThreatEntitySetResponse($result->toArray());
    }
}
