<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteVerifiedDestinationNumber;

trait DeleteVerifiedDestinationNumberTrait
{
    /**
     * @param DeleteVerifiedDestinationNumberRequest $args
     * @return DeleteVerifiedDestinationNumberResponse
     */
    public function deleteVerifiedDestinationNumber(DeleteVerifiedDestinationNumberRequest $args)
    {
        $result = parent::deleteVerifiedDestinationNumber($args->toArray());
        return new DeleteVerifiedDestinationNumberResponse($result->toArray());
    }
}
