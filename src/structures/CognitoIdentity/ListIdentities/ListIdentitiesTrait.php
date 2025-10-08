<?php

namespace Sunaoka\Aws\Structures\CognitoIdentity\ListIdentities;

trait ListIdentitiesTrait
{
    /**
     * @param ListIdentitiesRequest $args
     * @return ListIdentitiesResponse
     */
    public function listIdentities(ListIdentitiesRequest $args)
    {
        $result = parent::listIdentities($args->toArray());
        return new ListIdentitiesResponse($result->toArray());
    }
}
