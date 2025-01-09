<?php

namespace Sunaoka\Aws\Structures\Macie2\ListClassificationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'ERROR' $code
 */
class LastRunErrorStatus extends Shape
{
    /**
     * @param array{code?: 'NONE'|'ERROR'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
