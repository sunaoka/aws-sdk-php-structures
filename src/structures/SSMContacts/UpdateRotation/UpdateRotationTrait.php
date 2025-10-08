<?php

namespace Sunaoka\Aws\Structures\SSMContacts\UpdateRotation;

trait UpdateRotationTrait
{
    /**
     * @param UpdateRotationRequest $args
     * @return UpdateRotationResponse
     */
    public function updateRotation(UpdateRotationRequest $args)
    {
        $result = parent::updateRotation($args->toArray());
        return new UpdateRotationResponse($result->toArray());
    }
}
