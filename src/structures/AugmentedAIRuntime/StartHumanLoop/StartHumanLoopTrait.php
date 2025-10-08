<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StartHumanLoop;

trait StartHumanLoopTrait
{
    /**
     * @param StartHumanLoopRequest $args
     * @return StartHumanLoopResponse
     */
    public function startHumanLoop(StartHumanLoopRequest $args)
    {
        $result = parent::startHumanLoop($args->toArray());
        return new StartHumanLoopResponse($result->toArray());
    }
}
