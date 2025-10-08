<?php

namespace Sunaoka\Aws\Structures\Organizations\ListHandshakesForOrganization;

trait ListHandshakesForOrganizationTrait
{
    /**
     * @param ListHandshakesForOrganizationRequest $args
     * @return ListHandshakesForOrganizationResponse
     */
    public function listHandshakesForOrganization(ListHandshakesForOrganizationRequest $args)
    {
        $result = parent::listHandshakesForOrganization($args->toArray());
        return new ListHandshakesForOrganizationResponse($result->toArray());
    }
}
