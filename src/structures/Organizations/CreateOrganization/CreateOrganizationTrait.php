<?php

namespace Sunaoka\Aws\Structures\Organizations\CreateOrganization;

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
