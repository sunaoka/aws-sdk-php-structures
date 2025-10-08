<?php

namespace Sunaoka\Aws\Structures\Iam\GetAccessKeyLastUsed;

trait GetAccessKeyLastUsedTrait
{
    /**
     * @param GetAccessKeyLastUsedRequest $args
     * @return GetAccessKeyLastUsedResponse
     */
    public function getAccessKeyLastUsed(GetAccessKeyLastUsedRequest $args)
    {
        $result = parent::getAccessKeyLastUsed($args->toArray());
        return new GetAccessKeyLastUsedResponse($result->toArray());
    }
}
