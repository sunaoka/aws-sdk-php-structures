<?php

namespace Sunaoka\Aws\Structures\SSMContacts\DeleteRotationOverride;

trait DeleteRotationOverrideTrait
{
    /**
     * @param DeleteRotationOverrideRequest $args
     * @return DeleteRotationOverrideResponse
     */
    public function deleteRotationOverride(DeleteRotationOverrideRequest $args)
    {
        $result = parent::deleteRotationOverride($args->toArray());
        return new DeleteRotationOverrideResponse($result->toArray());
    }
}
