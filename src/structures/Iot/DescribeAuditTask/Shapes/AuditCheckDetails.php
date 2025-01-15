<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeAuditTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'WAITING_FOR_DATA_COLLECTION'|'CANCELED'|'COMPLETED_COMPLIANT'|'COMPLETED_NON_COMPLIANT'|'FAILED'|null $checkRunStatus
 * @property bool|null $checkCompliant
 * @property int|null $totalResourcesCount
 * @property int|null $nonCompliantResourcesCount
 * @property int|null $suppressedNonCompliantResourcesCount
 * @property string|null $errorCode
 * @property string|null $message
 */
class AuditCheckDetails extends Shape
{
    /**
     * @param array{
     *     checkRunStatus?: 'IN_PROGRESS'|'WAITING_FOR_DATA_COLLECTION'|'CANCELED'|'COMPLETED_COMPLIANT'|'COMPLETED_NON_COMPLIANT'|'FAILED'|null,
     *     checkCompliant?: bool|null,
     *     totalResourcesCount?: int|null,
     *     nonCompliantResourcesCount?: int|null,
     *     suppressedNonCompliantResourcesCount?: int|null,
     *     errorCode?: string|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
