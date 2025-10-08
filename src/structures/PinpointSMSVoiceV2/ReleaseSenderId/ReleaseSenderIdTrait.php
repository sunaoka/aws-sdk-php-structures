<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ReleaseSenderId;

trait ReleaseSenderIdTrait
{
    /**
     * @param ReleaseSenderIdRequest $args
     * @return ReleaseSenderIdResponse
     */
    public function releaseSenderId(ReleaseSenderIdRequest $args)
    {
        $result = parent::releaseSenderId($args->toArray());
        return new ReleaseSenderIdResponse($result->toArray());
    }
}
