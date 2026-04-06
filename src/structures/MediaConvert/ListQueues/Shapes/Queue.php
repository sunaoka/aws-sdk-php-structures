<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property int|null $ConcurrentJobs
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $LastUpdated
 * @property string $Name
 * @property 'ON_DEMAND'|'RESERVED'|null $PricingPlan
 * @property int|null $ProgressingJobsCount
 * @property ReservationPlan|null $ReservationPlan
 * @property list<ServiceOverride>|null $ServiceOverrides
 * @property 'ACTIVE'|'PAUSED'|null $Status
 * @property int|null $SubmittedJobsCount
 * @property 'SYSTEM'|'CUSTOM'|null $Type
 */
class Queue extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ConcurrentJobs?: int|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     LastUpdated?: \Aws\Api\DateTimeResult|null,
     *     Name: string,
     *     PricingPlan?: 'ON_DEMAND'|'RESERVED'|null,
     *     ProgressingJobsCount?: int|null,
     *     ReservationPlan?: ReservationPlan|null,
     *     ServiceOverrides?: list<ServiceOverride>|null,
     *     Status?: 'ACTIVE'|'PAUSED'|null,
     *     SubmittedJobsCount?: int|null,
     *     Type?: 'SYSTEM'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
