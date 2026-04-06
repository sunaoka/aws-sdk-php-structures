<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListAnomalies;

trait ListAnomaliesTrait
{
    /**
     * @param ListAnomaliesRequest $args
     * @return ListAnomaliesResponse
     */
    public function listAnomalies(ListAnomaliesRequest $args)
    {
        $result = parent::listAnomalies($args->toArray());
        return new ListAnomaliesResponse($result->toArray());
    }
}
