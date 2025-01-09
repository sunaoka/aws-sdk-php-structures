<?php

namespace Sunaoka\Aws\Structures\Athena\BatchGetQueryExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReusedPreviousResult
 */
class ResultReuseInformation extends Shape
{
    /**
     * @param array{ReusedPreviousResult: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
