<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMessaging\GetChannelMembershipPreferences;

trait GetChannelMembershipPreferencesTrait
{
    /**
     * @param GetChannelMembershipPreferencesRequest $args
     * @return GetChannelMembershipPreferencesResponse
     */
    public function getChannelMembershipPreferences(GetChannelMembershipPreferencesRequest $args)
    {
        $result = parent::getChannelMembershipPreferences($args->toArray());
        return new GetChannelMembershipPreferencesResponse($result->toArray());
    }
}
