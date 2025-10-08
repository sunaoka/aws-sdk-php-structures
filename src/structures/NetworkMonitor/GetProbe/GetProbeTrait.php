<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\GetProbe;

trait GetProbeTrait
{
    /**
     * @param GetProbeRequest $args
     * @return GetProbeResponse
     */
    public function getProbe(GetProbeRequest $args)
    {
        $result = parent::getProbe($args->toArray());
        return new GetProbeResponse($result->toArray());
    }
}
