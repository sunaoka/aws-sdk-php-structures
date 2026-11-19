<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\ListPointInTimeRecoveries;

trait ListPointInTimeRecoveriesTrait
{
    /**
     * @param ListPointInTimeRecoveriesRequest $args
     * @return ListPointInTimeRecoveriesResponse
     */
    public function listPointInTimeRecoveries(ListPointInTimeRecoveriesRequest $args)
    {
        $result = parent::listPointInTimeRecoveries($args->toArray());
        return new ListPointInTimeRecoveriesResponse($result->toArray());
    }
}
