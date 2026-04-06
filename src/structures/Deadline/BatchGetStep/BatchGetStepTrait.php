<?php

namespace Sunaoka\Aws\Structures\Deadline\BatchGetStep;

trait BatchGetStepTrait
{
    /**
     * @param BatchGetStepRequest $args
     * @return BatchGetStepResponse
     */
    public function batchGetStep(BatchGetStepRequest $args)
    {
        $result = parent::batchGetStep($args->toArray());
        return new BatchGetStepResponse($result->toArray());
    }
}
