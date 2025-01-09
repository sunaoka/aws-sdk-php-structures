<?php

namespace Sunaoka\Aws\Structures\DataSync\StartTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS' $ReportLevel
 */
class ReportOverride extends Shape
{
    /**
     * @param array{ReportLevel?: 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
