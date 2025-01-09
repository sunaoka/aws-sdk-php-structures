<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Port
 * @property string $PortName
 */
class ActionRemotePortDetails extends Shape
{
    /**
     * @param array{
     *     Port?: int,
     *     PortName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
