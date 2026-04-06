<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutConferencePreference;

trait PutConferencePreferenceTrait
{
    /**
     * @param PutConferencePreferenceRequest $args
     * @return PutConferencePreferenceResponse
     */
    public function putConferencePreference(PutConferencePreferenceRequest $args)
    {
        $result = parent::putConferencePreference($args->toArray());
        return new PutConferencePreferenceResponse($result->toArray());
    }
}
