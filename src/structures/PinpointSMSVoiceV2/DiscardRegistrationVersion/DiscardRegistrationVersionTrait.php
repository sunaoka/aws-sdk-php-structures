<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DiscardRegistrationVersion;

trait DiscardRegistrationVersionTrait
{
    /**
     * @param DiscardRegistrationVersionRequest $args
     * @return DiscardRegistrationVersionResponse
     */
    public function discardRegistrationVersion(DiscardRegistrationVersionRequest $args)
    {
        $result = parent::discardRegistrationVersion($args->toArray());
        return new DiscardRegistrationVersionResponse($result->toArray());
    }
}
