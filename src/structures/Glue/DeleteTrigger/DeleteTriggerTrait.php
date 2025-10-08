<?php

namespace Sunaoka\Aws\Structures\Glue\DeleteTrigger;

trait DeleteTriggerTrait
{
    /**
     * @param DeleteTriggerRequest $args
     * @return DeleteTriggerResponse
     */
    public function deleteTrigger(DeleteTriggerRequest $args)
    {
        $result = parent::deleteTrigger($args->toArray());
        return new DeleteTriggerResponse($result->toArray());
    }
}
