<?php

namespace Sunaoka\Aws\Structures\mgn\StartCutover;

trait StartCutoverTrait
{
    /**
     * @param StartCutoverRequest $args
     * @return StartCutoverResponse
     */
    public function startCutover(StartCutoverRequest $args)
    {
        $result = parent::startCutover($args->toArray());
        return new StartCutoverResponse($result->toArray());
    }
}
