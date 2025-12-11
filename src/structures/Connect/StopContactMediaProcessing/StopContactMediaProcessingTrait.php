<?php

namespace Sunaoka\Aws\Structures\Connect\StopContactMediaProcessing;

trait StopContactMediaProcessingTrait
{
    /**
     * @param StopContactMediaProcessingRequest $args
     * @return StopContactMediaProcessingResponse
     */
    public function stopContactMediaProcessing(StopContactMediaProcessingRequest $args)
    {
        $result = parent::stopContactMediaProcessing($args->toArray());
        return new StopContactMediaProcessingResponse($result->toArray());
    }
}
