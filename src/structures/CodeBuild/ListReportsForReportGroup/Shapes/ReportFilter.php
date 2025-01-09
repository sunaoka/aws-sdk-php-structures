<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReportsForReportGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING' $status
 */
class ReportFilter extends Shape
{
    /**
     * @param array{status?: 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
