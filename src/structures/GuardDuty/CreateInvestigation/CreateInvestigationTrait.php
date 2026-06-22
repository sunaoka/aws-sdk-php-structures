<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateInvestigation;

trait CreateInvestigationTrait
{
    /**
     * @param CreateInvestigationRequest $args
     * @return CreateInvestigationResponse
     */
    public function createInvestigation(CreateInvestigationRequest $args)
    {
        $result = parent::createInvestigation($args->toArray());
        return new CreateInvestigationResponse($result->toArray());
    }
}
