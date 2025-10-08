<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteRotation;

trait DeleteRotationTrait
{
    /**
     * @param DeleteRotationRequest $args
     * @return DeleteRotationResponse
     */
    public function deleteRotation(DeleteRotationRequest $args)
    {
        $result = parent::deleteRotation($args->toArray());
        return new DeleteRotationResponse($result->toArray());
    }
}
