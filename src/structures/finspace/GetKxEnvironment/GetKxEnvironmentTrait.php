<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxEnvironment;

trait GetKxEnvironmentTrait
{
    /**
     * @param GetKxEnvironmentRequest $args
     * @return GetKxEnvironmentResponse
     */
    public function getKxEnvironment(GetKxEnvironmentRequest $args)
    {
        $result = parent::getKxEnvironment($args->toArray());
        return new GetKxEnvironmentResponse($result->toArray());
    }
}
