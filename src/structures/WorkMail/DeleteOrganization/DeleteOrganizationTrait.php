<?php

namespace Sunaoka\Aws\Structures\WorkMail\DeleteOrganization;

trait DeleteOrganizationTrait
{
    /**
     * @param DeleteOrganizationRequest $args
     * @return DeleteOrganizationResponse
     */
    public function deleteOrganization(DeleteOrganizationRequest $args)
    {
        $result = parent::deleteOrganization($args->toArray());
        return new DeleteOrganizationResponse($result->toArray());
    }
}
