<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\MergeDeveloperIdentities;

trait MergeDeveloperIdentitiesTrait
{
    /**
     * @param MergeDeveloperIdentitiesRequest $args
     * @return MergeDeveloperIdentitiesResponse
     */
    public function mergeDeveloperIdentities(MergeDeveloperIdentitiesRequest $args)
    {
        $result = parent::mergeDeveloperIdentities($args->toArray());
        return new MergeDeveloperIdentitiesResponse($result->toArray());
    }
}
