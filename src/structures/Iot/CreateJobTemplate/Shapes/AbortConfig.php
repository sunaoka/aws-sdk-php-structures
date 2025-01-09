<?php

namespace Sunaoka\Aws\Structures\Iot\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AbortCriteria> $criteriaList
 */
class AbortConfig extends Shape
{
    /**
     * @param array{criteriaList: list<AbortCriteria>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
