<?php

namespace Sunaoka\Aws\Structures\Route53\GetHealthCheckCount;

trait GetHealthCheckCountTrait
{
    /**
     * @param GetHealthCheckCountRequest $args
     * @return GetHealthCheckCountResponse
     */
    public function getHealthCheckCount(GetHealthCheckCountRequest $args)
    {
        $result = parent::getHealthCheckCount($args->toArray());
        return new GetHealthCheckCountResponse($result->toArray());
    }
}
