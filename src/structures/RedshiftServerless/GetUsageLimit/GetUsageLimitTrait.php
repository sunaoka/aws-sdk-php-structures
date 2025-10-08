<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetUsageLimit;

trait GetUsageLimitTrait
{
    /**
     * @param GetUsageLimitRequest $args
     * @return GetUsageLimitResponse
     */
    public function getUsageLimit(GetUsageLimitRequest $args)
    {
        $result = parent::getUsageLimit($args->toArray());
        return new GetUsageLimitResponse($result->toArray());
    }
}
