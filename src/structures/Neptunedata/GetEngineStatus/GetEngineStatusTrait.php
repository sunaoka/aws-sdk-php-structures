<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetEngineStatus;

trait GetEngineStatusTrait
{
    /**
     * @return GetEngineStatusResponse
     */
    public function getEngineStatus()
    {
        $result = parent::getEngineStatus();
        return new GetEngineStatusResponse($result->toArray());
    }
}
