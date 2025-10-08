<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateChatToken;

trait CreateChatTokenTrait
{
    /**
     * @param CreateChatTokenRequest $args
     * @return CreateChatTokenResponse
     */
    public function createChatToken(CreateChatTokenRequest $args)
    {
        $result = parent::createChatToken($args->toArray());
        return new CreateChatTokenResponse($result->toArray());
    }
}
