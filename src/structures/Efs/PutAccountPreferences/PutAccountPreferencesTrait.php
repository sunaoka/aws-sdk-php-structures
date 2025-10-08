<?php

namespace Sunaoka\Aws\Structures\Efs\PutAccountPreferences;

trait PutAccountPreferencesTrait
{
    /**
     * @param PutAccountPreferencesRequest $args
     * @return PutAccountPreferencesResponse
     */
    public function putAccountPreferences(PutAccountPreferencesRequest $args)
    {
        $result = parent::putAccountPreferences($args->toArray());
        return new PutAccountPreferencesResponse($result->toArray());
    }
}
