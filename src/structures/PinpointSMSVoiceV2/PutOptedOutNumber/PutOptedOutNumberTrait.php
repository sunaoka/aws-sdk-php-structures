<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\PutOptedOutNumber;

trait PutOptedOutNumberTrait
{
    /**
     * @param PutOptedOutNumberRequest $args
     * @return PutOptedOutNumberResponse
     */
    public function putOptedOutNumber(PutOptedOutNumberRequest $args)
    {
        $result = parent::putOptedOutNumber($args->toArray());
        return new PutOptedOutNumberResponse($result->toArray());
    }
}
