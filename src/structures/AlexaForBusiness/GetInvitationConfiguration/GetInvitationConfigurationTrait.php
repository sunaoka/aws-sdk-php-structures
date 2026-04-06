<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\GetInvitationConfiguration;

trait GetInvitationConfigurationTrait
{
    /**
     * @param GetInvitationConfigurationRequest $args
     * @return GetInvitationConfigurationResponse
     */
    public function getInvitationConfiguration(GetInvitationConfigurationRequest $args)
    {
        $result = parent::getInvitationConfiguration($args->toArray());
        return new GetInvitationConfigurationResponse($result->toArray());
    }
}
