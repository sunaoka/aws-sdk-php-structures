<?php

namespace Sunaoka\Aws\Structures\AbuseSignal\ListAbuseReportStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $reportId
 * @property string|null $correlationId
 * @property 'QUEUED'|'PROCESSING'|'COMPLETED' $status
 * @property string $description
 * @property 'ACTIONED'|'NOT_RESOLVABLE_TO_AWS'|'REVIEWED_NO_AWS_ACTION'|'CONTENT_DOWN_OR_INACCESSIBLE'|'NEED_MORE_INFORMATION'|null $reasonCode
 */
class ReportStatusListItem extends Shape
{
    /**
     * @param array{
     *     reportId: string,
     *     correlationId?: string|null,
     *     status: 'QUEUED'|'PROCESSING'|'COMPLETED',
     *     description: string,
     *     reasonCode?: 'ACTIONED'|'NOT_RESOLVABLE_TO_AWS'|'REVIEWED_NO_AWS_ACTION'|'CONTENT_DOWN_OR_INACCESSIBLE'|'NEED_MORE_INFORMATION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
