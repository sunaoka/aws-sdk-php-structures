<?php

namespace Sunaoka\Aws\Structures\IVS\GetStream;

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
