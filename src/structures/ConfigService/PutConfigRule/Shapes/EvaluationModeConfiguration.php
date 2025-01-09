<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutConfigRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DETECTIVE'|'PROACTIVE' $Mode
 */
class EvaluationModeConfiguration extends Shape
{
    /**
     * @param array{Mode?: 'DETECTIVE'|'PROACTIVE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
