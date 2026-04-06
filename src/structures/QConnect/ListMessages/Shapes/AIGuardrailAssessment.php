<?php

namespace Sunaoka\Aws\Structures\QConnect\ListMessages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $blocked
 */
class AIGuardrailAssessment extends Shape
{
    /**
     * @param array{blocked: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
