<?php

namespace Sunaoka\Aws\Structures\Batch\SubmitServiceJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $attempts
 * @property list<ServiceJobEvaluateOnExit>|null $evaluateOnExit
 */
class ServiceJobRetryStrategy extends Shape
{
    /**
     * @param array{
     *     attempts: int,
     *     evaluateOnExit?: list<ServiceJobEvaluateOnExit>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
