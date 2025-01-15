<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Port
 * @property string|null $PortName
 */
class ActionLocalPortDetails extends Shape
{
    /**
     * @param array{
     *     Port?: int|null,
     *     PortName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
