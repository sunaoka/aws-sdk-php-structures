<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\StopHumanLoop;

trait StopHumanLoopTrait
{
    /**
     * @param StopHumanLoopRequest $args
     * @return StopHumanLoopResponse
     */
    public function stopHumanLoop(StopHumanLoopRequest $args)
    {
        $result = parent::stopHumanLoop($args->toArray());
        return new StopHumanLoopResponse($result->toArray());
    }
}
