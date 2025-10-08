<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateContainerAgent;

trait UpdateContainerAgentTrait
{
    /**
     * @param UpdateContainerAgentRequest $args
     * @return UpdateContainerAgentResponse
     */
    public function updateContainerAgent(UpdateContainerAgentRequest $args)
    {
        $result = parent::updateContainerAgent($args->toArray());
        return new UpdateContainerAgentResponse($result->toArray());
    }
}
