<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRegistrationAssociation;

trait CreateRegistrationAssociationTrait
{
    /**
     * @param CreateRegistrationAssociationRequest $args
     * @return CreateRegistrationAssociationResponse
     */
    public function createRegistrationAssociation(CreateRegistrationAssociationRequest $args)
    {
        $result = parent::createRegistrationAssociation($args->toArray());
        return new CreateRegistrationAssociationResponse($result->toArray());
    }
}
