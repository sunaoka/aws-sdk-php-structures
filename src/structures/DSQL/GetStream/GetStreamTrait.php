<?php

namespace Sunaoka\Aws\Structures\DSQL\GetStream;

trait GetStreamTrait
{
    /**
     * @param GetStreamRequest $args
     * @return GetStreamResponse
     */
    public function getStream(GetStreamRequest $args)
    {
        $result = parent::getStream($args->toArray());
        return new GetStreamResponse($result->toArray());
    }
}
