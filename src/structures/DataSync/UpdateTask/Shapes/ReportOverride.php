<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS'|null $ReportLevel
 */
class ReportOverride extends Shape
{
    /**
     * @param array{ReportLevel?: 'ERRORS_ONLY'|'SUCCESSES_AND_ERRORS'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
