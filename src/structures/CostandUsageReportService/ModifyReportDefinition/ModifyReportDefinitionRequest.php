<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\ModifyReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReportName
 * @property Shapes\ReportDefinition $ReportDefinition
 */
class ModifyReportDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ReportName: string,
     *     ReportDefinition: Shapes\ReportDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
