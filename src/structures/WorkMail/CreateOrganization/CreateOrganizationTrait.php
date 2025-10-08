<?php

namespace Sunaoka\Aws\Structures\WorkMail\CreateOrganization;

trait CreateOrganizationTrait
{
    /**
     * @param CreateOrganizationRequest $args
     * @return CreateOrganizationResponse
     */
    public function createOrganization(CreateOrganizationRequest $args)
    {
        $result = parent::createOrganization($args->toArray());
        return new CreateOrganizationResponse($result->toArray());
    }
}
