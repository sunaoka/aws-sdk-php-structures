<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlanKey;

trait GetUsagePlanKeyTrait
{
    /**
     * @param GetUsagePlanKeyRequest $args
     * @return GetUsagePlanKeyResponse
     */
    public function getUsagePlanKey(GetUsagePlanKeyRequest $args)
    {
        $result = parent::getUsagePlanKey($args->toArray());
        return new GetUsagePlanKeyResponse($result->toArray());
    }
}
