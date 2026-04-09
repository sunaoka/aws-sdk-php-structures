<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\ExecuteScheduledReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $clientToken
 * @property bool|null $dryRun
 */
class ExecuteScheduledReportRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     clientToken?: string|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
