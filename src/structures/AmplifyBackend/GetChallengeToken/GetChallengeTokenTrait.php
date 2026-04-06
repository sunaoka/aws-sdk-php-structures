<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetChallengeToken;

trait GetChallengeTokenTrait
{
    /**
     * @param GetChallengeTokenRequest $args
     * @return GetChallengeTokenResponse
     */
    public function getChallengeToken(GetChallengeTokenRequest $args)
    {
        $result = parent::getChallengeToken($args->toArray());
        return new GetChallengeTokenResponse($result->toArray());
    }
}
