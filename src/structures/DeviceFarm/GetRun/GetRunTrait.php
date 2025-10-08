<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetRun;

trait GetRunTrait
{
    /**
     * @param GetRunRequest $args
     * @return GetRunResponse
     */
    public function getRun(GetRunRequest $args)
    {
        $result = parent::getRun($args->toArray());
        return new GetRunResponse($result->toArray());
    }
}
