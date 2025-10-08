<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction;

trait BatchApplyUpdateActionTrait
{
    /**
     * @param BatchApplyUpdateActionRequest $args
     * @return BatchApplyUpdateActionResponse
     */
    public function batchApplyUpdateAction(BatchApplyUpdateActionRequest $args)
    {
        $result = parent::batchApplyUpdateAction($args->toArray());
        return new BatchApplyUpdateActionResponse($result->toArray());
    }
}
