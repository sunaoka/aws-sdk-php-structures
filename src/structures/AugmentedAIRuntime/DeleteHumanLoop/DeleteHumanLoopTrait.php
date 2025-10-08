<?php

namespace Sunaoka\Aws\Structures\AugmentedAIRuntime\DeleteHumanLoop;

trait DeleteHumanLoopTrait
{
    /**
     * @param DeleteHumanLoopRequest $args
     * @return DeleteHumanLoopResponse
     */
    public function deleteHumanLoop(DeleteHumanLoopRequest $args)
    {
        $result = parent::deleteHumanLoop($args->toArray());
        return new DeleteHumanLoopResponse($result->toArray());
    }
}
