<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateLimit;

trait UpdateLimitTrait
{
    /**
     * @param UpdateLimitRequest $args
     * @return UpdateLimitResponse
     */
    public function updateLimit(UpdateLimitRequest $args)
    {
        $result = parent::updateLimit($args->toArray());
        return new UpdateLimitResponse($result->toArray());
    }
}
