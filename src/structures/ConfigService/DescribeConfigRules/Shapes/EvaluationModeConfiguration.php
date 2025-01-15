<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConfigRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE'|null $Mode
 */
class EvaluationModeConfiguration extends Shape
{
    /**
     * @param array{Mode?: 'DETECTIVE'|'PROACTIVE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
