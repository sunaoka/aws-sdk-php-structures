<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListSpacesForOrganization;

trait ListSpacesForOrganizationTrait
{
    /**
     * @param ListSpacesForOrganizationRequest $args
     * @return ListSpacesForOrganizationResponse
     */
    public function listSpacesForOrganization(ListSpacesForOrganizationRequest $args)
    {
        $result = parent::listSpacesForOrganization($args->toArray());
        return new ListSpacesForOrganizationResponse($result->toArray());
    }
}
