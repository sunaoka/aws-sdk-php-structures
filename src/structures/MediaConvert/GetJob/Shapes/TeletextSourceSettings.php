<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PageNumber
 */
class TeletextSourceSettings extends Shape
{
    /**
     * @param array{PageNumber?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
