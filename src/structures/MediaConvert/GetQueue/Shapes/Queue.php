<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property int $ConcurrentJobs
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $LastUpdated
 * @property string $Name
 * @property 'ON_DEMAND'|'RESERVED' $PricingPlan
 * @property int $ProgressingJobsCount
 * @property ReservationPlan $ReservationPlan
 * @property list<ServiceOverride> $ServiceOverrides
 * @property 'ACTIVE'|'PAUSED' $Status
 * @property int $SubmittedJobsCount
 * @property 'SYSTEM'|'CUSTOM' $Type
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     ConcurrentJobs?: int,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     LastUpdated?: \Aws\Api\DateTimeResult,
     *     Name: string,
     *     PricingPlan?: 'ON_DEMAND'|'RESERVED',
     *     ProgressingJobsCount?: int,
     *     ReservationPlan?: ReservationPlan,
     *     ServiceOverrides?: list<ServiceOverride>,
     *     Status?: 'ACTIVE'|'PAUSED',
     *     SubmittedJobsCount?: int,
     *     Type?: 'SYSTEM'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
