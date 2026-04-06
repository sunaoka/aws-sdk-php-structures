<?php

namespace Sunaoka\Aws\Structures\Chatbot\GetAccountPreferences;

trait GetAccountPreferencesTrait
{
    /**
     * @param GetAccountPreferencesRequest $args
     * @return GetAccountPreferencesResponse
     */
    public function getAccountPreferences(GetAccountPreferencesRequest $args)
    {
        $result = parent::getAccountPreferences($args->toArray());
        return new GetAccountPreferencesResponse($result->toArray());
    }
}
