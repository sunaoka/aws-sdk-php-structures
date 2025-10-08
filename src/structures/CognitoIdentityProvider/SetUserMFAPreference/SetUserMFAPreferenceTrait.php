<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\SetUserMFAPreference;

trait SetUserMFAPreferenceTrait
{
    /**
     * @param SetUserMFAPreferenceRequest $args
     * @return SetUserMFAPreferenceResponse
     */
    public function setUserMFAPreference(SetUserMFAPreferenceRequest $args)
    {
        $result = parent::setUserMFAPreference($args->toArray());
        return new SetUserMFAPreferenceResponse($result->toArray());
    }
}
