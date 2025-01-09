<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\ModifyReportDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lastDelivery
 * @property 'SUCCESS'|'ERROR_PERMISSIONS'|'ERROR_NO_BUCKET' $lastStatus
 */
class ReportStatus extends Shape
{
    /**
     * @param array{
     *     lastDelivery?: string,
     *     lastStatus?: 'SUCCESS'|'ERROR_PERMISSIONS'|'ERROR_NO_BUCKET'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
