<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\GetPrincipalTagAttributeMap;

trait GetPrincipalTagAttributeMapTrait
{
    /**
     * @param GetPrincipalTagAttributeMapRequest $args
     * @return GetPrincipalTagAttributeMapResponse
     */
    public function getPrincipalTagAttributeMap(GetPrincipalTagAttributeMapRequest $args)
    {
        $result = parent::getPrincipalTagAttributeMap($args->toArray());
        return new GetPrincipalTagAttributeMapResponse($result->toArray());
    }
}
