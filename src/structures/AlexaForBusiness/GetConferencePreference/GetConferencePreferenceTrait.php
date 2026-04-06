<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetConferencePreference;

trait GetConferencePreferenceTrait
{
    /**
     * @param GetConferencePreferenceRequest $args
     * @return GetConferencePreferenceResponse
     */
    public function getConferencePreference(GetConferencePreferenceRequest $args)
    {
        $result = parent::getConferencePreference($args->toArray());
        return new GetConferencePreferenceResponse($result->toArray());
    }
}
