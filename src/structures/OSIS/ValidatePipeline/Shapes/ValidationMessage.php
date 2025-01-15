<?php

namespace Sunaoka\Aws\Structures\OSIS\ValidatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 */
class ValidationMessage extends Shape
{
    /**
     * @param array{Message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
