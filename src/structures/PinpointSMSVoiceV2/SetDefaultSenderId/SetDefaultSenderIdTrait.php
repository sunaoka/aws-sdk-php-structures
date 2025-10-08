<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultSenderId;

trait SetDefaultSenderIdTrait
{
    /**
     * @param SetDefaultSenderIdRequest $args
     * @return SetDefaultSenderIdResponse
     */
    public function setDefaultSenderId(SetDefaultSenderIdRequest $args)
    {
        $result = parent::setDefaultSenderId($args->toArray());
        return new SetDefaultSenderIdResponse($result->toArray());
    }
}
