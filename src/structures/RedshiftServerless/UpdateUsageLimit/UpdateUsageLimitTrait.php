<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\UpdateUsageLimit;

trait UpdateUsageLimitTrait
{
    /**
     * @param UpdateUsageLimitRequest $args
     * @return UpdateUsageLimitResponse
     */
    public function updateUsageLimit(UpdateUsageLimitRequest $args)
    {
        $result = parent::updateUsageLimit($args->toArray());
        return new UpdateUsageLimitResponse($result->toArray());
    }
}
