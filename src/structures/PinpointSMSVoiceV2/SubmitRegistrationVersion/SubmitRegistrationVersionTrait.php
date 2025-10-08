<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SubmitRegistrationVersion;

trait SubmitRegistrationVersionTrait
{
    /**
     * @param SubmitRegistrationVersionRequest $args
     * @return SubmitRegistrationVersionResponse
     */
    public function submitRegistrationVersion(SubmitRegistrationVersionRequest $args)
    {
        $result = parent::submitRegistrationVersion($args->toArray());
        return new SubmitRegistrationVersionResponse($result->toArray());
    }
}
