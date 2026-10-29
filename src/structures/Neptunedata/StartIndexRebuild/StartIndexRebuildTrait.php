<?php

namespace Sunaoka\Aws\Structures\Neptunedata\StartIndexRebuild;

trait StartIndexRebuildTrait
{
    /**
     * @param StartIndexRebuildRequest $args
     * @return StartIndexRebuildResponse
     */
    public function startIndexRebuild(StartIndexRebuildRequest $args)
    {
        $result = parent::startIndexRebuild($args->toArray());
        return new StartIndexRebuildResponse($result->toArray());
    }
}
