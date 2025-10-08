<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCoipPoolUsage;

trait GetCoipPoolUsageTrait
{
    /**
     * @param GetCoipPoolUsageRequest $args
     * @return GetCoipPoolUsageResponse
     */
    public function getCoipPoolUsage(GetCoipPoolUsageRequest $args)
    {
        $result = parent::getCoipPoolUsage($args->toArray());
        return new GetCoipPoolUsageResponse($result->toArray());
    }
}
