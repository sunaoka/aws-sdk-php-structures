<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\SetPrincipalTagAttributeMap;

trait SetPrincipalTagAttributeMapTrait
{
    /**
     * @param SetPrincipalTagAttributeMapRequest $args
     * @return SetPrincipalTagAttributeMapResponse
     */
    public function setPrincipalTagAttributeMap(SetPrincipalTagAttributeMapRequest $args)
    {
        $result = parent::setPrincipalTagAttributeMap($args->toArray());
        return new SetPrincipalTagAttributeMapResponse($result->toArray());
    }
}
