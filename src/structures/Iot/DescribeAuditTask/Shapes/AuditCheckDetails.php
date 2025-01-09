<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'WAITING_FOR_DATA_COLLECTION'|'CANCELED'|'COMPLETED_COMPLIANT'|'COMPLETED_NON_COMPLIANT'|'FAILED' $checkRunStatus
 * @property bool $checkCompliant
 * @property int $totalResourcesCount
 * @property int $nonCompliantResourcesCount
 * @property int $suppressedNonCompliantResourcesCount
 * @property string $errorCode
 * @property string $message
 */
class AuditCheckDetails extends Shape
{
    /**
     * @param array{
     *     checkRunStatus?: 'IN_PROGRESS'|'WAITING_FOR_DATA_COLLECTION'|'CANCELED'|'COMPLETED_COMPLIANT'|'COMPLETED_NON_COMPLIANT'|'FAILED',
     *     checkCompliant?: bool,
     *     totalResourcesCount?: int,
     *     nonCompliantResourcesCount?: int,
     *     suppressedNonCompliantResourcesCount?: int,
     *     errorCode?: string,
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
