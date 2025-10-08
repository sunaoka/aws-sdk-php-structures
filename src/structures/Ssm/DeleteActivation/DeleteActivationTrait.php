<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteActivation;

trait DeleteActivationTrait
{
    /**
     * @param DeleteActivationRequest $args
     * @return DeleteActivationResponse
     */
    public function deleteActivation(DeleteActivationRequest $args)
    {
        $result = parent::deleteActivation($args->toArray());
        return new DeleteActivationResponse($result->toArray());
    }
}
