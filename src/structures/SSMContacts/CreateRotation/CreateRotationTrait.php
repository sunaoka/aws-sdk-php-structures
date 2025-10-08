<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateRotation;

trait CreateRotationTrait
{
    /**
     * @param CreateRotationRequest $args
     * @return CreateRotationResponse
     */
    public function createRotation(CreateRotationRequest $args)
    {
        $result = parent::createRotation($args->toArray());
        return new CreateRotationResponse($result->toArray());
    }
}
