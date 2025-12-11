<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListInvestigations;

trait ListInvestigationsTrait
{
    /**
     * @param ListInvestigationsRequest $args
     * @return ListInvestigationsResponse
     */
    public function listInvestigations(ListInvestigationsRequest $args)
    {
        $result = parent::listInvestigations($args->toArray());
        return new ListInvestigationsResponse($result->toArray());
    }
}
