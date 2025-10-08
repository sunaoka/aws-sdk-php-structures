<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\ListHumanLoops;

trait ListHumanLoopsTrait
{
    /**
     * @param ListHumanLoopsRequest $args
     * @return ListHumanLoopsResponse
     */
    public function listHumanLoops(ListHumanLoopsRequest $args)
    {
        $result = parent::listHumanLoops($args->toArray());
        return new ListHumanLoopsResponse($result->toArray());
    }
}
