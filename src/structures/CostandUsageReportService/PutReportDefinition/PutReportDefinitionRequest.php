<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\PutReportDefinition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReportDefinition $ReportDefinition
 * @property list<Shapes\Tag> $Tags
 */
class PutReportDefinitionRequest extends Request
{
    /**
     * @param array{
     *     ReportDefinition: Shapes\ReportDefinition,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
