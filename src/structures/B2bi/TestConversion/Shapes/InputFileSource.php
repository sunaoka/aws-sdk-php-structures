<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileContent
 */
class InputFileSource extends Shape
{
    /**
     * @param array{fileContent?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
