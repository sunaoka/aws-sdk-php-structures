<?php

namespace Sunaoka\Aws\Structures\PcaConnectorScep\GetChallengePassword;

trait GetChallengePasswordTrait
{
    /**
     * @param GetChallengePasswordRequest $args
     * @return GetChallengePasswordResponse
     */
    public function getChallengePassword(GetChallengePasswordRequest $args)
    {
        $result = parent::getChallengePassword($args->toArray());
        return new GetChallengePasswordResponse($result->toArray());
    }
}
