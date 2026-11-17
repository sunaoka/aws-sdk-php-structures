<?php

namespace Sunaoka\Aws\Structures\WellArchitected\GetAgentPreferences;

trait GetAgentPreferencesTrait
{
    /**
     * @param GetAgentPreferencesRequest $args
     * @return GetAgentPreferencesResponse
     */
    public function getAgentPreferences(GetAgentPreferencesRequest $args)
    {
        $result = parent::getAgentPreferences($args->toArray());
        return new GetAgentPreferencesResponse($result->toArray());
    }
}
