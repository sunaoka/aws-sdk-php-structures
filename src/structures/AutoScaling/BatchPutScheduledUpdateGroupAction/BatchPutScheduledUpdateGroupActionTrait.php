<?php

namespace Sunaoka\Aws\Structures\AutoScaling\BatchPutScheduledUpdateGroupAction;

trait BatchPutScheduledUpdateGroupActionTrait
{
    /**
     * @param BatchPutScheduledUpdateGroupActionRequest $args
     * @return BatchPutScheduledUpdateGroupActionResponse
     */
    public function batchPutScheduledUpdateGroupAction(BatchPutScheduledUpdateGroupActionRequest $args)
    {
        $result = parent::batchPutScheduledUpdateGroupAction($args->toArray());
        return new BatchPutScheduledUpdateGroupActionResponse($result->toArray());
    }
}
