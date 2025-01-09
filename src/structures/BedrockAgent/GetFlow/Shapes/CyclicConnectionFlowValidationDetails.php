<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $connection
 */
class CyclicConnectionFlowValidationDetails extends Shape
{
    /**
     * @param array{connection: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
