<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\CreateProbe;

trait CreateProbeTrait
{
    /**
     * @param CreateProbeRequest $args
     * @return CreateProbeResponse
     */
    public function createProbe(CreateProbeRequest $args)
    {
        $result = parent::createProbe($args->toArray());
        return new CreateProbeResponse($result->toArray());
    }
}
