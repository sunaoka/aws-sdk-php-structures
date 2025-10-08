<?php

namespace Sunaoka\Aws\Structures\CloudFormation\RecordHandlerProgress;

trait RecordHandlerProgressTrait
{
    /**
     * @param RecordHandlerProgressRequest $args
     * @return RecordHandlerProgressResponse
     */
    public function recordHandlerProgress(RecordHandlerProgressRequest $args)
    {
        $result = parent::recordHandlerProgress($args->toArray());
        return new RecordHandlerProgressResponse($result->toArray());
    }
}
