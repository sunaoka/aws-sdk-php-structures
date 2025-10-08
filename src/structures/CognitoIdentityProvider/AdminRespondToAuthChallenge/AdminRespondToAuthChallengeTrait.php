<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\AdminRespondToAuthChallenge;

trait AdminRespondToAuthChallengeTrait
{
    /**
     * @param AdminRespondToAuthChallengeRequest $args
     * @return AdminRespondToAuthChallengeResponse
     */
    public function adminRespondToAuthChallenge(AdminRespondToAuthChallengeRequest $args)
    {
        $result = parent::adminRespondToAuthChallenge($args->toArray());
        return new AdminRespondToAuthChallengeResponse($result->toArray());
    }
}
