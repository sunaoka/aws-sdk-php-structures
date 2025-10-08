<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotationOverride;

trait GetRotationOverrideTrait
{
    /**
     * @param GetRotationOverrideRequest $args
     * @return GetRotationOverrideResponse
     */
    public function getRotationOverride(GetRotationOverrideRequest $args)
    {
        $result = parent::getRotationOverride($args->toArray());
        return new GetRotationOverrideResponse($result->toArray());
    }
}
