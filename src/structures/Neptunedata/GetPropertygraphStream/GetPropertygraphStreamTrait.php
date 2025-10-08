<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream;

trait GetPropertygraphStreamTrait
{
    /**
     * @param GetPropertygraphStreamRequest $args
     * @return GetPropertygraphStreamResponse
     */
    public function getPropertygraphStream(GetPropertygraphStreamRequest $args)
    {
        $result = parent::getPropertygraphStream($args->toArray());
        return new GetPropertygraphStreamResponse($result->toArray());
    }
}
