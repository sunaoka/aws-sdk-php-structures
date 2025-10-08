<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary;

trait GetCanaryTrait
{
    /**
     * @param GetCanaryRequest $args
     * @return GetCanaryResponse
     */
    public function getCanary(GetCanaryRequest $args)
    {
        $result = parent::getCanary($args->toArray());
        return new GetCanaryResponse($result->toArray());
    }
}
