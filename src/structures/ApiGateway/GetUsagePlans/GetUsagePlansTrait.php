<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetUsagePlans;

trait GetUsagePlansTrait
{
    /**
     * @param GetUsagePlansRequest $args
     * @return GetUsagePlansResponse
     */
    public function getUsagePlans(GetUsagePlansRequest $args)
    {
        $result = parent::getUsagePlans($args->toArray());
        return new GetUsagePlansResponse($result->toArray());
    }
}
