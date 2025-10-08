<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlanKey;

trait CreateUsagePlanKeyTrait
{
    /**
     * @param CreateUsagePlanKeyRequest $args
     * @return CreateUsagePlanKeyResponse
     */
    public function createUsagePlanKey(CreateUsagePlanKeyRequest $args)
    {
        $result = parent::createUsagePlanKey($args->toArray());
        return new CreateUsagePlanKeyResponse($result->toArray());
    }
}
