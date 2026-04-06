<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetSessionAction;

trait BatchGetSessionActionTrait
{
    /**
     * @param BatchGetSessionActionRequest $args
     * @return BatchGetSessionActionResponse
     */
    public function batchGetSessionAction(BatchGetSessionActionRequest $args)
    {
        $result = parent::batchGetSessionAction($args->toArray());
        return new BatchGetSessionActionResponse($result->toArray());
    }
}
