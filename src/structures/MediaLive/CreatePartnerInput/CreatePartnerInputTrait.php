<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreatePartnerInput;

trait CreatePartnerInputTrait
{
    /**
     * @param CreatePartnerInputRequest $args
     * @return CreatePartnerInputResponse
     */
    public function createPartnerInput(CreatePartnerInputRequest $args)
    {
        $result = parent::createPartnerInput($args->toArray());
        return new CreatePartnerInputResponse($result->toArray());
    }
}
