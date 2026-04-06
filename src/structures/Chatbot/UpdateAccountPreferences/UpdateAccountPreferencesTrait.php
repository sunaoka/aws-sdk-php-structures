<?php

namespace Sunaoka\Aws\Structures\Chatbot\UpdateAccountPreferences;

trait UpdateAccountPreferencesTrait
{
    /**
     * @param UpdateAccountPreferencesRequest $args
     * @return UpdateAccountPreferencesResponse
     */
    public function updateAccountPreferences(UpdateAccountPreferencesRequest $args)
    {
        $result = parent::updateAccountPreferences($args->toArray());
        return new UpdateAccountPreferencesResponse($result->toArray());
    }
}
