<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\VerifyDestinationNumber;

trait VerifyDestinationNumberTrait
{
    /**
     * @param VerifyDestinationNumberRequest $args
     * @return VerifyDestinationNumberResponse
     */
    public function verifyDestinationNumber(VerifyDestinationNumberRequest $args)
    {
        $result = parent::verifyDestinationNumber($args->toArray());
        return new VerifyDestinationNumberResponse($result->toArray());
    }
}
