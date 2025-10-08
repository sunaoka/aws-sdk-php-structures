<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateVerifiedDestinationNumber;

trait CreateVerifiedDestinationNumberTrait
{
    /**
     * @param CreateVerifiedDestinationNumberRequest $args
     * @return CreateVerifiedDestinationNumberResponse
     */
    public function createVerifiedDestinationNumber(CreateVerifiedDestinationNumberRequest $args)
    {
        $result = parent::createVerifiedDestinationNumber($args->toArray());
        return new CreateVerifiedDestinationNumberResponse($result->toArray());
    }
}
