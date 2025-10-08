<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListRecoveryPoints;

trait ListRecoveryPointsTrait
{
    /**
     * @param ListRecoveryPointsRequest $args
     * @return ListRecoveryPointsResponse
     */
    public function listRecoveryPoints(ListRecoveryPointsRequest $args)
    {
        $result = parent::listRecoveryPoints($args->toArray());
        return new ListRecoveryPointsResponse($result->toArray());
    }
}
