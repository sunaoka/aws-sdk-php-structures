<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary;

trait UpdateCanaryTrait
{
    /**
     * @param UpdateCanaryRequest $args
     * @return UpdateCanaryResponse
     */
    public function updateCanary(UpdateCanaryRequest $args)
    {
        $result = parent::updateCanary($args->toArray());
        return new UpdateCanaryResponse($result->toArray());
    }
}
