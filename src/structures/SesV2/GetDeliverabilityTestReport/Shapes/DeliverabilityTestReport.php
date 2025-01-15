<?php

namespace Sunaoka\Aws\Structures\SesV2\GetDeliverabilityTestReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReportId
 * @property string|null $ReportName
 * @property string|null $Subject
 * @property string|null $FromEmailAddress
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property 'IN_PROGRESS'|'COMPLETED'|null $DeliverabilityTestStatus
 */
class DeliverabilityTestReport extends Shape
{
    /**
     * @param array{
     *     ReportId?: string|null,
     *     ReportName?: string|null,
     *     Subject?: string|null,
     *     FromEmailAddress?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     DeliverabilityTestStatus?: 'IN_PROGRESS'|'COMPLETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
