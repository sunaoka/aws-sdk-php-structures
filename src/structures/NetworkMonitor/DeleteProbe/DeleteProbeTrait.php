<?php

namespace Sunaoka\Aws\Structures\NetworkMonitor\DeleteProbe;

trait DeleteProbeTrait
{
    /**
     * @param DeleteProbeRequest $args
     * @return DeleteProbeResponse
     */
    public function deleteProbe(DeleteProbeRequest $args)
    {
        $result = parent::deleteProbe($args->toArray());
        return new DeleteProbeResponse($result->toArray());
    }
}
