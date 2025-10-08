<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxEnvironment;

trait CreateKxEnvironmentTrait
{
    /**
     * @param CreateKxEnvironmentRequest $args
     * @return CreateKxEnvironmentResponse
     */
    public function createKxEnvironment(CreateKxEnvironmentRequest $args)
    {
        $result = parent::createKxEnvironment($args->toArray());
        return new CreateKxEnvironmentResponse($result->toArray());
    }
}
