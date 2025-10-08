<?php

namespace Sunaoka\Aws\Structures\Panorama\SignalApplicationInstanceNodeInstances;

trait SignalApplicationInstanceNodeInstancesTrait
{
    /**
     * @param SignalApplicationInstanceNodeInstancesRequest $args
     * @return SignalApplicationInstanceNodeInstancesResponse
     */
    public function signalApplicationInstanceNodeInstances(SignalApplicationInstanceNodeInstancesRequest $args)
    {
        $result = parent::signalApplicationInstanceNodeInstances($args->toArray());
        return new SignalApplicationInstanceNodeInstancesResponse($result->toArray());
    }
}
