<?php

namespace Sunaoka\Aws\Structures\CloudWatch\DeleteMetricStream;

trait DeleteMetricStreamTrait
{
    /**
     * @param DeleteMetricStreamRequest $args
     * @return DeleteMetricStreamResponse
     */
    public function deleteMetricStream(DeleteMetricStreamRequest $args)
    {
        $result = parent::deleteMetricStream($args->toArray());
        return new DeleteMetricStreamResponse($result->toArray());
    }
}
