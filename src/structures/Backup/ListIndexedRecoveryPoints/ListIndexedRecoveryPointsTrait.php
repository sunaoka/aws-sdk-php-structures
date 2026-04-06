<?php

namespace Sunaoka\Aws\Structures\Backup\ListIndexedRecoveryPoints;

trait ListIndexedRecoveryPointsTrait
{
    /**
     * @param ListIndexedRecoveryPointsRequest $args
     * @return ListIndexedRecoveryPointsResponse
     */
    public function listIndexedRecoveryPoints(ListIndexedRecoveryPointsRequest $args)
    {
        $result = parent::listIndexedRecoveryPoints($args->toArray());
        return new ListIndexedRecoveryPointsResponse($result->toArray());
    }
}
