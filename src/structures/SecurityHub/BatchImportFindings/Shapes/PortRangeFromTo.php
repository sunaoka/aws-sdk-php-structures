<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $From
 * @property int $To
 */
class PortRangeFromTo extends Shape
{
    /**
     * @param array{
     *     From?: int,
     *     To?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
