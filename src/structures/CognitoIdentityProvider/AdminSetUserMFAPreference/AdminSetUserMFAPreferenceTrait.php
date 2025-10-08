<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminSetUserMFAPreference;

trait AdminSetUserMFAPreferenceTrait
{
    /**
     * @param AdminSetUserMFAPreferenceRequest $args
     * @return AdminSetUserMFAPreferenceResponse
     */
    public function adminSetUserMFAPreference(AdminSetUserMFAPreferenceRequest $args)
    {
        $result = parent::adminSetUserMFAPreference($args->toArray());
        return new AdminSetUserMFAPreferenceResponse($result->toArray());
    }
}
