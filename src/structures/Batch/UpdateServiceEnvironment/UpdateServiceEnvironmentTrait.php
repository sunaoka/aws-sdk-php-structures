<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateServiceEnvironment;

trait UpdateServiceEnvironmentTrait
{
    /**
     * @param UpdateServiceEnvironmentRequest $args
     * @return UpdateServiceEnvironmentResponse
     */
    public function updateServiceEnvironment(UpdateServiceEnvironmentRequest $args)
    {
        $result = parent::updateServiceEnvironment($args->toArray());
        return new UpdateServiceEnvironmentResponse($result->toArray());
    }
}
