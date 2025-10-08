<?php

namespace Sunaoka\Aws\Structures\Iot\ValidateSecurityProfileBehaviors;

trait ValidateSecurityProfileBehaviorsTrait
{
    /**
     * @param ValidateSecurityProfileBehaviorsRequest $args
     * @return ValidateSecurityProfileBehaviorsResponse
     */
    public function validateSecurityProfileBehaviors(ValidateSecurityProfileBehaviorsRequest $args)
    {
        $result = parent::validateSecurityProfileBehaviors($args->toArray());
        return new ValidateSecurityProfileBehaviorsResponse($result->toArray());
    }
}
