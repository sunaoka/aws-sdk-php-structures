<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $intentId
 */
class IntentInputData extends Shape
{
    /**
     * @param array{intentId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
