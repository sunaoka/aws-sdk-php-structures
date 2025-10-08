<?php

namespace Sunaoka\Aws\Structures\QuickSight\CancelIngestion;

trait CancelIngestionTrait
{
    /**
     * @param CancelIngestionRequest $args
     * @return CancelIngestionResponse
     */
    public function cancelIngestion(CancelIngestionRequest $args)
    {
        $result = parent::cancelIngestion($args->toArray());
        return new CancelIngestionResponse($result->toArray());
    }
}
