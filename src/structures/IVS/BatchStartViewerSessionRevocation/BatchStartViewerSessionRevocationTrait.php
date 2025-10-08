<?php

namespace Sunaoka\Aws\Structures\IVS\BatchStartViewerSessionRevocation;

trait BatchStartViewerSessionRevocationTrait
{
    /**
     * @param BatchStartViewerSessionRevocationRequest $args
     * @return BatchStartViewerSessionRevocationResponse
     */
    public function batchStartViewerSessionRevocation(BatchStartViewerSessionRevocationRequest $args)
    {
        $result = parent::batchStartViewerSessionRevocation($args->toArray());
        return new BatchStartViewerSessionRevocationResponse($result->toArray());
    }
}
