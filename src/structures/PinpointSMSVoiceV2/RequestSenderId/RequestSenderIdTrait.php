<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\RequestSenderId;

trait RequestSenderIdTrait
{
    /**
     * @param RequestSenderIdRequest $args
     * @return RequestSenderIdResponse
     */
    public function requestSenderId(RequestSenderIdRequest $args)
    {
        $result = parent::requestSenderId($args->toArray());
        return new RequestSenderIdResponse($result->toArray());
    }
}
