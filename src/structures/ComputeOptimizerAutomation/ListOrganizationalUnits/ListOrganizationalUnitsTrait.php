<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\ListOrganizationalUnits;

trait ListOrganizationalUnitsTrait
{
    /**
     * @param ListOrganizationalUnitsRequest $args
     * @return ListOrganizationalUnitsResponse
     */
    public function listOrganizationalUnits(ListOrganizationalUnitsRequest $args)
    {
        $result = parent::listOrganizationalUnits($args->toArray());
        return new ListOrganizationalUnitsResponse($result->toArray());
    }
}
