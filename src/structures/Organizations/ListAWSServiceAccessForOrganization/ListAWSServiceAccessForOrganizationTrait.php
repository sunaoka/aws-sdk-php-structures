<?php

namespace Sunaoka\Aws\Structures\Organizations\ListAWSServiceAccessForOrganization;

trait ListAWSServiceAccessForOrganizationTrait
{
    /**
     * @param ListAWSServiceAccessForOrganizationRequest $args
     * @return ListAWSServiceAccessForOrganizationResponse
     */
    public function listAWSServiceAccessForOrganization(ListAWSServiceAccessForOrganizationRequest $args)
    {
        $result = parent::listAWSServiceAccessForOrganization($args->toArray());
        return new ListAWSServiceAccessForOrganizationResponse($result->toArray());
    }
}
