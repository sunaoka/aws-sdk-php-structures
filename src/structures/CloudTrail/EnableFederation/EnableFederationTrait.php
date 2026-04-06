<?php

namespace Sunaoka\Aws\Structures\CloudTrail\EnableFederation;

trait EnableFederationTrait
{
    /**
     * @param EnableFederationRequest $args
     * @return EnableFederationResponse
     */
    public function enableFederation(EnableFederationRequest $args)
    {
        $result = parent::enableFederation($args->toArray());
        return new EnableFederationResponse($result->toArray());
    }
}
