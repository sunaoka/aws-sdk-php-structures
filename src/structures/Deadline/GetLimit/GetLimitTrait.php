<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLimit;

trait GetLimitTrait
{
    /**
     * @param GetLimitRequest $args
     * @return GetLimitResponse
     */
    public function getLimit(GetLimitRequest $args)
    {
        $result = parent::getLimit($args->toArray());
        return new GetLimitResponse($result->toArray());
    }
}
