<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DisassociateOriginationIdentity;

trait DisassociateOriginationIdentityTrait
{
    /**
     * @param DisassociateOriginationIdentityRequest $args
     * @return DisassociateOriginationIdentityResponse
     */
    public function disassociateOriginationIdentity(DisassociateOriginationIdentityRequest $args)
    {
        $result = parent::disassociateOriginationIdentity($args->toArray());
        return new DisassociateOriginationIdentityResponse($result->toArray());
    }
}
