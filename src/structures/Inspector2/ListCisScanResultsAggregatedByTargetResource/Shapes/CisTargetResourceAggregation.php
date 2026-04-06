<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $platform
 * @property string $scanArn
 * @property StatusCounts|null $statusCounts
 * @property string|null $targetResourceId
 * @property array<string, list<string>>|null $targetResourceTags
 * @property 'TIMED_OUT'|'CANCELLED'|'COMPLETED'|null $targetStatus
 * @property 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'|null $targetStatusReason
 */
class CisTargetResourceAggregation extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     platform?: string|null,
     *     scanArn: string,
     *     statusCounts?: StatusCounts|null,
     *     targetResourceId?: string|null,
     *     targetResourceTags?: array<string, list<string>>|null,
     *     targetStatus?: 'TIMED_OUT'|'CANCELLED'|'COMPLETED'|null,
     *     targetStatusReason?: 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
