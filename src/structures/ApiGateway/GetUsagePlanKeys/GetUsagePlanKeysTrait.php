<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKeys;

trait GetUsagePlanKeysTrait
{
    /**
     * @param GetUsagePlanKeysRequest $args
     * @return GetUsagePlanKeysResponse
     */
    public function getUsagePlanKeys(GetUsagePlanKeysRequest $args)
    {
        $result = parent::getUsagePlanKeys($args->toArray());
        return new GetUsagePlanKeysResponse($result->toArray());
    }
}
