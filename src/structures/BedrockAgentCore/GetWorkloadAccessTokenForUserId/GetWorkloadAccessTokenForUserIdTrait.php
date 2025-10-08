<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetWorkloadAccessTokenForUserId;

trait GetWorkloadAccessTokenForUserIdTrait
{
    /**
     * @param GetWorkloadAccessTokenForUserIdRequest $args
     * @return GetWorkloadAccessTokenForUserIdResponse
     */
    public function getWorkloadAccessTokenForUserId(GetWorkloadAccessTokenForUserIdRequest $args)
    {
        $result = parent::getWorkloadAccessTokenForUserId($args->toArray());
        return new GetWorkloadAccessTokenForUserIdResponse($result->toArray());
    }
}
