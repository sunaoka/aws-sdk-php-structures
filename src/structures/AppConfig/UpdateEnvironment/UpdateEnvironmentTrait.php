<?php

namespace Sunaoka\Aws\Structures\AppConfig\UpdateEnvironment;

trait UpdateEnvironmentTrait
{
    /**
     * @param UpdateEnvironmentRequest $args
     * @return UpdateEnvironmentResponse
     */
    public function updateEnvironment(UpdateEnvironmentRequest $args)
    {
        $result = parent::updateEnvironment($args->toArray());
        return new UpdateEnvironmentResponse($result->toArray());
    }
}
