<?php

namespace Sunaoka\Aws\Structures\WellArchitected\PutAgentPreferences;

trait PutAgentPreferencesTrait
{
    /**
     * @param PutAgentPreferencesRequest $args
     * @return PutAgentPreferencesResponse
     */
    public function putAgentPreferences(PutAgentPreferencesRequest $args)
    {
        $result = parent::putAgentPreferences($args->toArray());
        return new PutAgentPreferencesResponse($result->toArray());
    }
}
