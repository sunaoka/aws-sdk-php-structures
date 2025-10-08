<?php

namespace Sunaoka\Aws\Structures\SSMContacts\CreateRotationOverride;

trait CreateRotationOverrideTrait
{
    /**
     * @param CreateRotationOverrideRequest $args
     * @return CreateRotationOverrideResponse
     */
    public function createRotationOverride(CreateRotationOverrideRequest $args)
    {
        $result = parent::createRotationOverride($args->toArray());
        return new CreateRotationOverrideResponse($result->toArray());
    }
}
