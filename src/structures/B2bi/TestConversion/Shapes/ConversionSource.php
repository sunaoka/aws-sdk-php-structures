<?php

namespace Sunaoka\Aws\Structures\B2bi\TestConversion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'JSON'|'XML' $fileFormat
 * @property InputFileSource $inputFile
 */
class ConversionSource extends Shape
{
    /**
     * @param array{
     *     fileFormat: 'JSON'|'XML',
     *     inputFile: InputFileSource
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
