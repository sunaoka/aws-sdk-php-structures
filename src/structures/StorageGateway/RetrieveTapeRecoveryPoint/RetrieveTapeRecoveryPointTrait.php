<?php

namespace Sunaoka\Aws\Structures\StorageGateway\RetrieveTapeRecoveryPoint;

trait RetrieveTapeRecoveryPointTrait
{
    /**
     * @param RetrieveTapeRecoveryPointRequest $args
     * @return RetrieveTapeRecoveryPointResponse
     */
    public function retrieveTapeRecoveryPoint(RetrieveTapeRecoveryPointRequest $args)
    {
        $result = parent::retrieveTapeRecoveryPoint($args->toArray());
        return new RetrieveTapeRecoveryPointResponse($result->toArray());
    }
}
