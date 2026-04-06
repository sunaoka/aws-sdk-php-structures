<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteImageUsageReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportId
 * @property bool|null $DryRun
 */
class DeleteImageUsageReportRequest extends Request
{
    /**
     * @param array{
     *     ReportId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
