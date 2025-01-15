<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\ModifyReportDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lastDelivery
 * @property 'SUCCESS'|'ERROR_PERMISSIONS'|'ERROR_NO_BUCKET'|null $lastStatus
 */
class ReportStatus extends Shape
{
    /**
     * @param array{
     *     lastDelivery?: string|null,
     *     lastStatus?: 'SUCCESS'|'ERROR_PERMISSIONS'|'ERROR_NO_BUCKET'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
