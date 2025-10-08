<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\PutChannelMembershipPreferences;

trait PutChannelMembershipPreferencesTrait
{
    /**
     * @param PutChannelMembershipPreferencesRequest $args
     * @return PutChannelMembershipPreferencesResponse
     */
    public function putChannelMembershipPreferences(PutChannelMembershipPreferencesRequest $args)
    {
        $result = parent::putChannelMembershipPreferences($args->toArray());
        return new PutChannelMembershipPreferencesResponse($result->toArray());
    }
}
