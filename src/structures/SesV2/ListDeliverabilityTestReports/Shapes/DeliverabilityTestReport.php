<?php

namespace Sunaoka\Aws\Structures\SesV2\ListDeliverabilityTestReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReportId
 * @property string $ReportName
 * @property string $Subject
 * @property string $FromEmailAddress
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property 'IN_PROGRESS'|'COMPLETED' $DeliverabilityTestStatus
 */
class DeliverabilityTestReport extends Shape
{
    /**
     * @param array{
     *     ReportId?: string,
     *     ReportName?: string,
     *     Subject?: string,
     *     FromEmailAddress?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     DeliverabilityTestStatus?: 'IN_PROGRESS'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
