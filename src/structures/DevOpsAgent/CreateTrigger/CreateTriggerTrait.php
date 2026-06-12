<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\CreateTrigger;

trait CreateTriggerTrait
{
    /**
     * @param CreateTriggerRequest $args
     * @return CreateTriggerResponse
     */
    public function createTrigger(CreateTriggerRequest $args)
    {
        $result = parent::createTrigger($args->toArray());
        return new CreateTriggerResponse($result->toArray());
    }
}
