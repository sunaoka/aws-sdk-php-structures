<?php

namespace Sunaoka\Aws\Structures\ConnectHealth\GetMedicalScribeListeningSession;

trait GetMedicalScribeListeningSessionTrait
{
    /**
     * @param GetMedicalScribeListeningSessionRequest $args
     * @return GetMedicalScribeListeningSessionResponse
     */
    public function getMedicalScribeListeningSession(GetMedicalScribeListeningSessionRequest $args)
    {
        $result = parent::getMedicalScribeListeningSession($args->toArray());
        return new GetMedicalScribeListeningSessionResponse($result->toArray());
    }
}
