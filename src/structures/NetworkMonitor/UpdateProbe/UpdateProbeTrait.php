<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\UpdateProbe;

trait UpdateProbeTrait
{
    /**
     * @param UpdateProbeRequest $args
     * @return UpdateProbeResponse
     */
    public function updateProbe(UpdateProbeRequest $args)
    {
        $result = parent::updateProbe($args->toArray());
        return new UpdateProbeResponse($result->toArray());
    }
}
