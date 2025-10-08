<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetAgentCard;

trait GetAgentCardTrait
{
    /**
     * @param GetAgentCardRequest $args
     * @return GetAgentCardResponse
     */
    public function getAgentCard(GetAgentCardRequest $args)
    {
        $result = parent::getAgentCard($args->toArray());
        return new GetAgentCardResponse($result->toArray());
    }
}
