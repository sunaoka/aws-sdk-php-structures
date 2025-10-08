<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxEnvironment;

trait UpdateKxEnvironmentTrait
{
    /**
     * @param UpdateKxEnvironmentRequest $args
     * @return UpdateKxEnvironmentResponse
     */
    public function updateKxEnvironment(UpdateKxEnvironmentRequest $args)
    {
        $result = parent::updateKxEnvironment($args->toArray());
        return new UpdateKxEnvironmentResponse($result->toArray());
    }
}
