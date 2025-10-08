<?php

namespace Sunaoka\Aws\Structures\Detective\GetInvestigation;

trait GetInvestigationTrait
{
    /**
     * @param GetInvestigationRequest $args
     * @return GetInvestigationResponse
     */
    public function getInvestigation(GetInvestigationRequest $args)
    {
        $result = parent::getInvestigation($args->toArray());
        return new GetInvestigationResponse($result->toArray());
    }
}
