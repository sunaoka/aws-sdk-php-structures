<?php

namespace Sunaoka\Aws\Structures\Sts\DecodeAuthorizationMessage;

trait DecodeAuthorizationMessageTrait
{
    /**
     * @param DecodeAuthorizationMessageRequest $args
     * @return DecodeAuthorizationMessageResponse
     */
    public function decodeAuthorizationMessage(DecodeAuthorizationMessageRequest $args)
    {
        $result = parent::decodeAuthorizationMessage($args->toArray());
        return new DecodeAuthorizationMessageResponse($result->toArray());
    }
}
