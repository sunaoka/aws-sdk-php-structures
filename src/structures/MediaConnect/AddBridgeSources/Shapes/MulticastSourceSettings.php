<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MulticastSourceIp
 */
class MulticastSourceSettings extends Shape
{
    /**
     * @param array{MulticastSourceIp?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
