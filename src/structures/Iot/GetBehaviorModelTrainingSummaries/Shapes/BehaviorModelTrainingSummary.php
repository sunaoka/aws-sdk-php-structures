<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $securityProfileName
 * @property string $behaviorName
 * @property \Aws\Api\DateTimeResult $trainingDataCollectionStartDate
 * @property 'PENDING_BUILD'|'ACTIVE'|'EXPIRED' $modelStatus
 * @property double $datapointsCollectionPercentage
 * @property \Aws\Api\DateTimeResult $lastModelRefreshDate
 */
class BehaviorModelTrainingSummary extends Shape
{
    /**
     * @param array{
     *     securityProfileName?: string,
     *     behaviorName?: string,
     *     trainingDataCollectionStartDate?: \Aws\Api\DateTimeResult,
     *     modelStatus?: 'PENDING_BUILD'|'ACTIVE'|'EXPIRED',
     *     datapointsCollectionPercentage?: double,
     *     lastModelRefreshDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
