<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\PutReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReportDefinition $ReportDefinition
 */
class PutReportDefinitionRequest extends Request
{
    /**
     * @param array{ReportDefinition: Shapes\ReportDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
