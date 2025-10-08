<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchStopUpdateAction;

trait BatchStopUpdateActionTrait
{
    /**
     * @param BatchStopUpdateActionRequest $args
     * @return BatchStopUpdateActionResponse
     */
    public function batchStopUpdateAction(BatchStopUpdateActionRequest $args)
    {
        $result = parent::batchStopUpdateAction($args->toArray());
        return new BatchStopUpdateActionResponse($result->toArray());
    }
}
