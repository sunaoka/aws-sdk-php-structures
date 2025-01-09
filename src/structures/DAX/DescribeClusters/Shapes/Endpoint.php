<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $Port
 * @property string $URL
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Port?: int,
     *     URL?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
