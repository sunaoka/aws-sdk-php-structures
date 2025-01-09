<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanResultsAggregatedByTargetResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $platform
 * @property string $scanArn
 * @property StatusCounts $statusCounts
 * @property string $targetResourceId
 * @property array<string, list<string>> $targetResourceTags
 * @property 'TIMED_OUT'|'CANCELLED'|'COMPLETED' $targetStatus
 * @property 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED' $targetStatusReason
 */
class CisTargetResourceAggregation extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     platform?: string,
     *     scanArn: string,
     *     statusCounts?: StatusCounts,
     *     targetResourceId?: string,
     *     targetResourceTags?: array<string, list<string>>,
     *     targetStatus?: 'TIMED_OUT'|'CANCELLED'|'COMPLETED',
     *     targetStatusReason?: 'SCAN_IN_PROGRESS'|'UNSUPPORTED_OS'|'SSM_UNMANAGED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
