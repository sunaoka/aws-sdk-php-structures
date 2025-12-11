<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\CompleteResourceTokenAuth;

trait CompleteResourceTokenAuthTrait
{
    /**
     * @param CompleteResourceTokenAuthRequest $args
     * @return CompleteResourceTokenAuthResponse
     */
    public function completeResourceTokenAuth(CompleteResourceTokenAuthRequest $args)
    {
        $result = parent::completeResourceTokenAuth($args->toArray());
        return new CompleteResourceTokenAuthResponse($result->toArray());
    }
}
