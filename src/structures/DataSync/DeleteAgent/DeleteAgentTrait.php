<?php

namespace Sunaoka\Aws\Structures\DataSync\DeleteAgent;

trait DeleteAgentTrait
{
    /**
     * @param DeleteAgentRequest $args
     * @return DeleteAgentResponse
     */
    public function deleteAgent(DeleteAgentRequest $args)
    {
        $result = parent::deleteAgent($args->toArray());
        return new DeleteAgentResponse($result->toArray());
    }
}
