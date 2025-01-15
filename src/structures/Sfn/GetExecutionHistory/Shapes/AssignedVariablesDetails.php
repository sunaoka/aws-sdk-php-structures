<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $truncated
 */
class AssignedVariablesDetails extends Shape
{
    /**
     * @param array{truncated?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
