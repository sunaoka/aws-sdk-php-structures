<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\UpdateConnectionPreferences;

trait UpdateConnectionPreferencesTrait
{
    /**
     * @param UpdateConnectionPreferencesRequest $args
     * @return UpdateConnectionPreferencesResponse
     */
    public function updateConnectionPreferences(UpdateConnectionPreferencesRequest $args)
    {
        $result = parent::updateConnectionPreferences($args->toArray());
        return new UpdateConnectionPreferencesResponse($result->toArray());
    }
}
