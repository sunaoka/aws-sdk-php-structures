<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\RespondToAuthChallenge;

trait RespondToAuthChallengeTrait
{
    /**
     * @param RespondToAuthChallengeRequest $args
     * @return RespondToAuthChallengeResponse
     */
    public function respondToAuthChallenge(RespondToAuthChallengeRequest $args)
    {
        $result = parent::respondToAuthChallenge($args->toArray());
        return new RespondToAuthChallengeResponse($result->toArray());
    }
}
