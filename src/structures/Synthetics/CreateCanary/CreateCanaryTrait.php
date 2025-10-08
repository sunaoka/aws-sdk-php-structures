<?php

namespace Sunaoka\Aws\Structures\Synthetics\CreateCanary;

trait CreateCanaryTrait
{
    /**
     * @param CreateCanaryRequest $args
     * @return CreateCanaryResponse
     */
    public function createCanary(CreateCanaryRequest $args)
    {
        $result = parent::createCanary($args->toArray());
        return new CreateCanaryResponse($result->toArray());
    }
}
