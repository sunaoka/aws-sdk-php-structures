<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\DeleteReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReportName
 */
class DeleteReportDefinitionRequest extends Request
{
    /**
     * @param array{ReportName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
