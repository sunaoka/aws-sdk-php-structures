<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListActors;

trait ListActorsTrait
{
    /**
     * @param ListActorsRequest $args
     * @return ListActorsResponse
     */
    public function listActors(ListActorsRequest $args)
    {
        $result = parent::listActors($args->toArray());
        return new ListActorsResponse($result->toArray());
    }
}
