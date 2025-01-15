<?php

namespace Sunaoka\Aws\Structures\Iot\GetBehaviorModelTrainingSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $securityProfileName
 * @property string|null $behaviorName
 * @property \Aws\Api\DateTimeResult|null $trainingDataCollectionStartDate
 * @property 'PENDING_BUILD'|'ACTIVE'|'EXPIRED'|null $modelStatus
 * @property double|null $datapointsCollectionPercentage
 * @property \Aws\Api\DateTimeResult|null $lastModelRefreshDate
 */
class BehaviorModelTrainingSummary extends Shape
{
    /**
     * @param array{
     *     securityProfileName?: string|null,
     *     behaviorName?: string|null,
     *     trainingDataCollectionStartDate?: \Aws\Api\DateTimeResult|null,
     *     modelStatus?: 'PENDING_BUILD'|'ACTIVE'|'EXPIRED'|null,
     *     datapointsCollectionPercentage?: double|null,
     *     lastModelRefreshDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
