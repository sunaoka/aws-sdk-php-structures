<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotation;

trait GetRotationTrait
{
    /**
     * @param GetRotationRequest $args
     * @return GetRotationResponse
     */
    public function getRotation(GetRotationRequest $args)
    {
        $result = parent::getRotation($args->toArray());
        return new GetRotationResponse($result->toArray());
    }
}
