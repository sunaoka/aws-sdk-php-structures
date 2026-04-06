<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\DeleteConnectionRecordingPreferences;

trait DeleteConnectionRecordingPreferencesTrait
{
    /**
     * @param DeleteConnectionRecordingPreferencesRequest $args
     * @return DeleteConnectionRecordingPreferencesResponse
     */
    public function deleteConnectionRecordingPreferences(DeleteConnectionRecordingPreferencesRequest $args)
    {
        $result = parent::deleteConnectionRecordingPreferences($args->toArray());
        return new DeleteConnectionRecordingPreferencesResponse($result->toArray());
    }
}
