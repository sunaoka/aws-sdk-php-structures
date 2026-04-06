<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\StartCodeRemediation;

trait StartCodeRemediationTrait
{
    /**
     * @param StartCodeRemediationRequest $args
     * @return StartCodeRemediationResponse
     */
    public function startCodeRemediation(StartCodeRemediationRequest $args)
    {
        $result = parent::startCodeRemediation($args->toArray());
        return new StartCodeRemediationResponse($result->toArray());
    }
}
