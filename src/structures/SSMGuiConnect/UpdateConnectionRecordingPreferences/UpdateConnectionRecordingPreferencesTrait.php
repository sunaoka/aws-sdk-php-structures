<?php

namespace Sunaoka\Aws\Structures\SSMGuiConnect\UpdateConnectionRecordingPreferences;

trait UpdateConnectionRecordingPreferencesTrait
{
    /**
     * @param UpdateConnectionRecordingPreferencesRequest $args
     * @return UpdateConnectionRecordingPreferencesResponse
     */
    public function updateConnectionRecordingPreferences(UpdateConnectionRecordingPreferencesRequest $args)
    {
        $result = parent::updateConnectionRecordingPreferences($args->toArray());
        return new UpdateConnectionRecordingPreferencesResponse($result->toArray());
    }
}
