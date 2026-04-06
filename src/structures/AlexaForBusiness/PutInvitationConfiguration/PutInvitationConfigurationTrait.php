<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\PutInvitationConfiguration;

trait PutInvitationConfigurationTrait
{
    /**
     * @param PutInvitationConfigurationRequest $args
     * @return PutInvitationConfigurationResponse
     */
    public function putInvitationConfiguration(PutInvitationConfigurationRequest $args)
    {
        $result = parent::putInvitationConfiguration($args->toArray());
        return new PutInvitationConfigurationResponse($result->toArray());
    }
}
