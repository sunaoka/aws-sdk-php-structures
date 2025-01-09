<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentSeparator
 * @property string $dataElementSeparator
 * @property string $segmentTerminator
 */
class X12Delimiters extends Shape
{
    /**
     * @param array{
     *     componentSeparator?: string,
     *     dataElementSeparator?: string,
     *     segmentTerminator?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
