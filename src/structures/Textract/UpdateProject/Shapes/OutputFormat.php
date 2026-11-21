<?php

namespace Sunaoka\Aws\Structures\Textract\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OutputAdditionalFileFormat $AdditionalFileFormat
 * @property OutputTextFormat $TextFormat
 */
class OutputFormat extends Shape
{
    /**
     * @param array{
     *     AdditionalFileFormat: OutputAdditionalFileFormat,
     *     TextFormat: OutputTextFormat
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
