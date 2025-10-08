<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetUserAuthFactors;

trait GetUserAuthFactorsTrait
{
    /**
     * @param GetUserAuthFactorsRequest $args
     * @return GetUserAuthFactorsResponse
     */
    public function getUserAuthFactors(GetUserAuthFactorsRequest $args)
    {
        $result = parent::getUserAuthFactors($args->toArray());
        return new GetUserAuthFactorsResponse($result->toArray());
    }
}
