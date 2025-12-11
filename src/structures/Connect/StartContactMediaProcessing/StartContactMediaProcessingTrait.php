<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactMediaProcessing;

trait StartContactMediaProcessingTrait
{
    /**
     * @param StartContactMediaProcessingRequest $args
     * @return StartContactMediaProcessingResponse
     */
    public function startContactMediaProcessing(StartContactMediaProcessingRequest $args)
    {
        $result = parent::startContactMediaProcessing($args->toArray());
        return new StartContactMediaProcessingResponse($result->toArray());
    }
}
