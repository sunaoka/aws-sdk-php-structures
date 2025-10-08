<?php

namespace Sunaoka\Aws\Structures\Omics\StartRun;

trait StartRunTrait
{
    /**
     * @param StartRunRequest $args
     * @return StartRunResponse
     */
    public function startRun(StartRunRequest $args)
    {
        $result = parent::startRun($args->toArray());
        return new StartRunResponse($result->toArray());
    }
}
