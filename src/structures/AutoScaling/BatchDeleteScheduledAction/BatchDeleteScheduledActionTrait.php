<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchDeleteScheduledAction;

trait BatchDeleteScheduledActionTrait
{
    /**
     * @param BatchDeleteScheduledActionRequest $args
     * @return BatchDeleteScheduledActionResponse
     */
    public function batchDeleteScheduledAction(BatchDeleteScheduledActionRequest $args)
    {
        $result = parent::batchDeleteScheduledAction($args->toArray());
        return new BatchDeleteScheduledActionResponse($result->toArray());
    }
}
