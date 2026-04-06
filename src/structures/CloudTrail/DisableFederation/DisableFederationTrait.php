<?php

namespace Sunaoka\Aws\Structures\CloudTrail\DisableFederation;

trait DisableFederationTrait
{
    /**
     * @param DisableFederationRequest $args
     * @return DisableFederationResponse
     */
    public function disableFederation(DisableFederationRequest $args)
    {
        $result = parent::disableFederation($args->toArray());
        return new DisableFederationResponse($result->toArray());
    }
}
