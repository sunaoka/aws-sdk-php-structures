<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch;

trait ChangeMessageVisibilityBatchTrait
{
    /**
     * @param ChangeMessageVisibilityBatchRequest $args
     * @return ChangeMessageVisibilityBatchResponse
     */
    public function changeMessageVisibilityBatch(ChangeMessageVisibilityBatchRequest $args)
    {
        $result = parent::changeMessageVisibilityBatch($args->toArray());
        return new ChangeMessageVisibilityBatchResponse($result->toArray());
    }
}
