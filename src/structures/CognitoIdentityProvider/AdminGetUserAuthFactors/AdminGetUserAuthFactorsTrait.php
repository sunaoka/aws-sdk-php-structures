<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminGetUserAuthFactors;

trait AdminGetUserAuthFactorsTrait
{
    /**
     * @param AdminGetUserAuthFactorsRequest $args
     * @return AdminGetUserAuthFactorsResponse
     */
    public function adminGetUserAuthFactors(AdminGetUserAuthFactorsRequest $args)
    {
        $result = parent::adminGetUserAuthFactors($args->toArray());
        return new AdminGetUserAuthFactorsResponse($result->toArray());
    }
}
