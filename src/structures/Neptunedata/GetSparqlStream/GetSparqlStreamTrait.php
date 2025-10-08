<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetSparqlStream;

trait GetSparqlStreamTrait
{
    /**
     * @param GetSparqlStreamRequest $args
     * @return GetSparqlStreamResponse
     */
    public function getSparqlStream(GetSparqlStreamRequest $args)
    {
        $result = parent::getSparqlStream($args->toArray());
        return new GetSparqlStreamResponse($result->toArray());
    }
}
