<?php

namespace Sunaoka\Aws\Structures\MailManager\GetTrafficPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IngressAnalysis|null $Analysis
 */
class IngressBooleanToEvaluate extends Shape
{
    /**
     * @param array{Analysis?: IngressAnalysis|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
