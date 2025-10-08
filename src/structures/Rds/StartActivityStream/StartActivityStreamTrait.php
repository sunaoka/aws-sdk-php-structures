<?php

namespace Sunaoka\Aws\Structures\Rds\StartActivityStream;

trait StartActivityStreamTrait
{
    /**
     * @param StartActivityStreamRequest $args
     * @return StartActivityStreamResponse
     */
    public function startActivityStream(StartActivityStreamRequest $args)
    {
        $result = parent::startActivityStream($args->toArray());
        return new StartActivityStreamResponse($result->toArray());
    }
}
