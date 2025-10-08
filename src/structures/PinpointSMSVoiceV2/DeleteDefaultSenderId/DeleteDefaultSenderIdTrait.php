<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteDefaultSenderId;

trait DeleteDefaultSenderIdTrait
{
    /**
     * @param DeleteDefaultSenderIdRequest $args
     * @return DeleteDefaultSenderIdResponse
     */
    public function deleteDefaultSenderId(DeleteDefaultSenderIdRequest $args)
    {
        $result = parent::deleteDefaultSenderId($args->toArray());
        return new DeleteDefaultSenderIdResponse($result->toArray());
    }
}
