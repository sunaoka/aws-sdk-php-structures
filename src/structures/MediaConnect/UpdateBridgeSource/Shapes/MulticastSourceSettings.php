<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateBridgeSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MulticastSourceIp
 */
class MulticastSourceSettings extends Shape
{
    /**
     * @param array{MulticastSourceIp?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
