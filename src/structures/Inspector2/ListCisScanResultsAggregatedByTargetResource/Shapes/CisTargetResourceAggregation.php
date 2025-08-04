<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scanArn
 * @property string|null $targetResourceId
 * @property string|null $accountId
 * @property array<string, list<string>>|null $targetResourceTags
 * @property StatusCounts|null $statusCounts
 * @property string|null $platform
 * @property 'TIMED_OUT'|'CANCELLED'|'COMPLETED'|null $targetStatus
 * @property 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'|null $targetStatusReason
 */
class CisTargetResourceAggregation extends Shape
{
    /**
     * @param array{
     *     scanArn: string,
     *     targetResourceId?: string|null,
     *     accountId?: string|null,
     *     targetResourceTags?: array<string, list<string>>|null,
     *     statusCounts?: StatusCounts|null,
     *     platform?: string|null,
     *     targetStatus?: 'TIMED_OUT'|'CANCELLED'|'COMPLETED'|null,
     *     targetStatusReason?: 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
