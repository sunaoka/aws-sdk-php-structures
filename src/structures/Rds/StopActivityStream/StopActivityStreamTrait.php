<?php

namespace Sunaoka\Aws\Structures\Rds\StopActivityStream;

trait StopActivityStreamTrait
{
    /**
     * @param StopActivityStreamRequest $args
     * @return StopActivityStreamResponse
     */
    public function stopActivityStream(StopActivityStreamRequest $args)
    {
        $result = parent::stopActivityStream($args->toArray());
        return new StopActivityStreamResponse($result->toArray());
    }
}
