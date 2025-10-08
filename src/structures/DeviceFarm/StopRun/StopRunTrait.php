<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\StopRun;

trait StopRunTrait
{
    /**
     * @param StopRunRequest $args
     * @return StopRunResponse
     */
    public function stopRun(StopRunRequest $args)
    {
        $result = parent::stopRun($args->toArray());
        return new StopRunResponse($result->toArray());
    }
}
