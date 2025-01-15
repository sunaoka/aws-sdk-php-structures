<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $attempts
 * @property list<EvaluateOnExit>|null $evaluateOnExit
 */
class RetryStrategy extends Shape
{
    /**
     * @param array{
     *     attempts?: int|null,
     *     evaluateOnExit?: list<EvaluateOnExit>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
