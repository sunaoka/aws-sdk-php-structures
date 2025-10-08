<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\UpdateDevEnvironment;

trait UpdateDevEnvironmentTrait
{
    /**
     * @param UpdateDevEnvironmentRequest $args
     * @return UpdateDevEnvironmentResponse
     */
    public function updateDevEnvironment(UpdateDevEnvironmentRequest $args)
    {
        $result = parent::updateDevEnvironment($args->toArray());
        return new UpdateDevEnvironmentResponse($result->toArray());
    }
}
