<?php

namespace Sunaoka\Aws\Structures\Glue\CreateTrigger;

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
