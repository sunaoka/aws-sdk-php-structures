<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\InvokeModelWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bytes
 */
class PayloadPart extends Shape
{
    /**
     * @param array{bytes?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
