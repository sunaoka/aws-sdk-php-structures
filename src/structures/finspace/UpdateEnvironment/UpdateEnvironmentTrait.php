<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateEnvironment;

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
