<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\GetConnectionRecordingPreferences;

trait GetConnectionRecordingPreferencesTrait
{
    /**
     * @return GetConnectionRecordingPreferencesResponse
     */
    public function getConnectionRecordingPreferences()
    {
        $result = parent::getConnectionRecordingPreferences();
        return new GetConnectionRecordingPreferencesResponse($result->toArray());
    }
}
