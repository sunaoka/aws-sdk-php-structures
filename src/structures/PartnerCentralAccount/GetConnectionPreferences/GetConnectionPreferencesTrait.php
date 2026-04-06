<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetConnectionPreferences;

trait GetConnectionPreferencesTrait
{
    /**
     * @param GetConnectionPreferencesRequest $args
     * @return GetConnectionPreferencesResponse
     */
    public function getConnectionPreferences(GetConnectionPreferencesRequest $args)
    {
        $result = parent::getConnectionPreferences($args->toArray());
        return new GetConnectionPreferencesResponse($result->toArray());
    }
}
