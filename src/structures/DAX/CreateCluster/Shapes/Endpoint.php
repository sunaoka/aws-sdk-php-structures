<?php

namespace Sunaoka\Aws\Structures\DAX\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property int|null $Port
 * @property string|null $URL
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Port?: int|null,
     *     URL?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
