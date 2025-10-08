<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListUsageLimits;

trait ListUsageLimitsTrait
{
    /**
     * @param ListUsageLimitsRequest $args
     * @return ListUsageLimitsResponse
     */
    public function listUsageLimits(ListUsageLimitsRequest $args)
    {
        $result = parent::listUsageLimits($args->toArray());
        return new ListUsageLimitsResponse($result->toArray());
    }
}
