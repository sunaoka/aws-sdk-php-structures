<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING'|null $status
 */
class ReportFilter extends Shape
{
    /**
     * @param array{status?: 'GENERATING'|'SUCCEEDED'|'FAILED'|'INCOMPLETE'|'DELETING'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
