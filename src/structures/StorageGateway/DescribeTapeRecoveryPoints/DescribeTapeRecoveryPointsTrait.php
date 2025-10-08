<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeTapeRecoveryPoints;

trait DescribeTapeRecoveryPointsTrait
{
    /**
     * @param DescribeTapeRecoveryPointsRequest $args
     * @return DescribeTapeRecoveryPointsResponse
     */
    public function describeTapeRecoveryPoints(DescribeTapeRecoveryPointsRequest $args)
    {
        $result = parent::describeTapeRecoveryPoints($args->toArray());
        return new DescribeTapeRecoveryPointsResponse($result->toArray());
    }
}
