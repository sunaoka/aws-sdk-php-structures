<?php

namespace Sunaoka\Aws\Structures\B2bi\GetPartnership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentSeparator
 * @property string|null $dataElementSeparator
 * @property string|null $segmentTerminator
 */
class X12Delimiters extends Shape
{
    /**
     * @param array{
     *     componentSeparator?: string|null,
     *     dataElementSeparator?: string|null,
     *     segmentTerminator?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
