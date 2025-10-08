<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetPreferences;

trait GetPreferencesTrait
{
    /**
     * @param GetPreferencesRequest $args
     * @return GetPreferencesResponse
     */
    public function getPreferences(GetPreferencesRequest $args)
    {
        $result = parent::getPreferences($args->toArray());
        return new GetPreferencesResponse($result->toArray());
    }
}
