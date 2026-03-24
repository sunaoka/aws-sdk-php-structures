<?php

namespace Sunaoka\Aws\Structures\Omics\CancelRunBatch;

trait CancelRunBatchTrait
{
    /**
     * @param CancelRunBatchRequest $args
     * @return CancelRunBatchResponse
     */
    public function cancelRunBatch(CancelRunBatchRequest $args)
    {
        $result = parent::cancelRunBatch($args->toArray());
        return new CancelRunBatchResponse($result->toArray());
    }
}
