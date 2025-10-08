<?php

namespace Sunaoka\Aws\Structures\Deadline\ListLimits;

trait ListLimitsTrait
{
    /**
     * @param ListLimitsRequest $args
     * @return ListLimitsResponse
     */
    public function listLimits(ListLimitsRequest $args)
    {
        $result = parent::listLimits($args->toArray());
        return new ListLimitsResponse($result->toArray());
    }
}
