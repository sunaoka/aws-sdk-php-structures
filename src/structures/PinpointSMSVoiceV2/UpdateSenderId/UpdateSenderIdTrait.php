<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateSenderId;

trait UpdateSenderIdTrait
{
    /**
     * @param UpdateSenderIdRequest $args
     * @return UpdateSenderIdResponse
     */
    public function updateSenderId(UpdateSenderIdRequest $args)
    {
        $result = parent::updateSenderId($args->toArray());
        return new UpdateSenderIdResponse($result->toArray());
    }
}
