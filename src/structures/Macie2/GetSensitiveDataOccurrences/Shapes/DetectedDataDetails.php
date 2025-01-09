<?php

namespace Sunaoka\Aws\Structures\Macie2\GetSensitiveDataOccurrences\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 */
class DetectedDataDetails extends Shape
{
    /**
     * @param array{value: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
