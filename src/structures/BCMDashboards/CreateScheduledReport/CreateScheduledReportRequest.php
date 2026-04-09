<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\CreateScheduledReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ScheduledReportInput $scheduledReport
 * @property list<Shapes\ResourceTag>|null $resourceTags
 * @property string|null $clientToken
 */
class CreateScheduledReportRequest extends Request
{
    /**
     * @param array{
     *     scheduledReport: Shapes\ScheduledReportInput,
     *     resourceTags?: list<Shapes\ResourceTag>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
