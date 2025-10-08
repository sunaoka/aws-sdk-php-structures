<?php

namespace Sunaoka\Aws\Structures\ApiGateway\UpdateUsage;

trait UpdateUsageTrait
{
    /**
     * @param UpdateUsageRequest $args
     * @return UpdateUsageResponse
     */
    public function updateUsage(UpdateUsageRequest $args)
    {
        $result = parent::updateUsage($args->toArray());
        return new UpdateUsageResponse($result->toArray());
    }
}
