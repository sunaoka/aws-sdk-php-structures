<?php

namespace Sunaoka\Aws\Structures\Detective\StartInvestigation;

trait StartInvestigationTrait
{
    /**
     * @param StartInvestigationRequest $args
     * @return StartInvestigationResponse
     */
    public function startInvestigation(StartInvestigationRequest $args)
    {
        $result = parent::startInvestigation($args->toArray());
        return new StartInvestigationResponse($result->toArray());
    }
}
