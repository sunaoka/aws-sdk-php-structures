<?php

namespace Sunaoka\Aws\Structures\StorageGateway\CancelRetrieval;

trait CancelRetrievalTrait
{
    /**
     * @param CancelRetrievalRequest $args
     * @return CancelRetrievalResponse
     */
    public function cancelRetrieval(CancelRetrievalRequest $args)
    {
        $result = parent::cancelRetrieval($args->toArray());
        return new CancelRetrievalResponse($result->toArray());
    }
}
