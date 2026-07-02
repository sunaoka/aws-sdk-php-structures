<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateProvisionedLimit;

trait UpdateProvisionedLimitTrait
{
    /**
     * @param UpdateProvisionedLimitRequest $args
     * @return UpdateProvisionedLimitResponse
     */
    public function updateProvisionedLimit(UpdateProvisionedLimitRequest $args)
    {
        $result = parent::updateProvisionedLimit($args->toArray());
        return new UpdateProvisionedLimitResponse($result->toArray());
    }
}
