<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetIPSet;

trait GetIPSetTrait
{
    /**
     * @param GetIPSetRequest $args
     * @return GetIPSetResponse
     */
    public function getIPSet(GetIPSetRequest $args)
    {
        $result = parent::getIPSet($args->toArray());
        return new GetIPSetResponse($result->toArray());
    }
}
