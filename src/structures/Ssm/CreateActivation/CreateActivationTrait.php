<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateActivation;

trait CreateActivationTrait
{
    /**
     * @param CreateActivationRequest $args
     * @return CreateActivationResponse
     */
    public function createActivation(CreateActivationRequest $args)
    {
        $result = parent::createActivation($args->toArray());
        return new CreateActivationResponse($result->toArray());
    }
}
