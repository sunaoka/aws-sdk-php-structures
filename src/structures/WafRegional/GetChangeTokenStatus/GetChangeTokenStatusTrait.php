<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetChangeTokenStatus;

trait GetChangeTokenStatusTrait
{
    /**
     * @param GetChangeTokenStatusRequest $args
     * @return GetChangeTokenStatusResponse
     */
    public function getChangeTokenStatus(GetChangeTokenStatusRequest $args)
    {
        $result = parent::getChangeTokenStatus($args->toArray());
        return new GetChangeTokenStatusResponse($result->toArray());
    }
}
