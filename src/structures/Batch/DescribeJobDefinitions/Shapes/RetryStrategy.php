<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $attempts
 * @property list<EvaluateOnExit> $evaluateOnExit
 */
class RetryStrategy extends Shape
{
    /**
     * @param array{
     *     attempts?: int,
     *     evaluateOnExit?: list<EvaluateOnExit>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
