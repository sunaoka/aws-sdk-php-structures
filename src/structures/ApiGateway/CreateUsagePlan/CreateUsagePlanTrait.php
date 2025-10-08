<?php

namespace Sunaoka\Aws\Structures\ApiGateway\CreateUsagePlan;

trait CreateUsagePlanTrait
{
    /**
     * @param CreateUsagePlanRequest $args
     * @return CreateUsagePlanResponse
     */
    public function createUsagePlan(CreateUsagePlanRequest $args)
    {
        $result = parent::createUsagePlan($args->toArray());
        return new CreateUsagePlanResponse($result->toArray());
    }
}
