<?php

namespace Sunaoka\Aws\Structures\WAFV2\CheckCapacity;

trait CheckCapacityTrait
{
    /**
     * @param CheckCapacityRequest $args
     * @return CheckCapacityResponse
     */
    public function checkCapacity(CheckCapacityRequest $args)
    {
        $result = parent::checkCapacity($args->toArray());
        return new CheckCapacityResponse($result->toArray());
    }
}
