<?php

namespace Sunaoka\Aws\Structures\Redshift\GetClusterCredentialsWithIAM;

trait GetClusterCredentialsWithIAMTrait
{
    /**
     * @param GetClusterCredentialsWithIAMRequest $args
     * @return GetClusterCredentialsWithIAMResponse
     */
    public function getClusterCredentialsWithIAM(GetClusterCredentialsWithIAMRequest $args)
    {
        $result = parent::getClusterCredentialsWithIAM($args->toArray());
        return new GetClusterCredentialsWithIAMResponse($result->toArray());
    }
}
