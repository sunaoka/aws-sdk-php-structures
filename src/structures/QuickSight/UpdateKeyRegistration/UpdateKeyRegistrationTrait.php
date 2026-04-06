<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateKeyRegistration;

trait UpdateKeyRegistrationTrait
{
    /**
     * @param UpdateKeyRegistrationRequest $args
     * @return UpdateKeyRegistrationResponse
     */
    public function updateKeyRegistration(UpdateKeyRegistrationRequest $args)
    {
        $result = parent::updateKeyRegistration($args->toArray());
        return new UpdateKeyRegistrationResponse($result->toArray());
    }
}
