<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\ListRegistrationAssociations;

trait ListRegistrationAssociationsTrait
{
    /**
     * @param ListRegistrationAssociationsRequest $args
     * @return ListRegistrationAssociationsResponse
     */
    public function listRegistrationAssociations(ListRegistrationAssociationsRequest $args)
    {
        $result = parent::listRegistrationAssociations($args->toArray());
        return new ListRegistrationAssociationsResponse($result->toArray());
    }
}
