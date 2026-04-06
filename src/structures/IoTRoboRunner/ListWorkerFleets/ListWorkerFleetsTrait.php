<?php

namespace Sunaoka\Aws\Structures\IoTRoboRunner\ListWorkerFleets;

trait ListWorkerFleetsTrait
{
    /**
     * @param ListWorkerFleetsRequest $args
     * @return ListWorkerFleetsResponse
     */
    public function listWorkerFleets(ListWorkerFleetsRequest $args)
    {
        $result = parent::listWorkerFleets($args->toArray());
        return new ListWorkerFleetsResponse($result->toArray());
    }
}
