<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateEventConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class Configuration extends Shape
{
    /**
     * @param array{Enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
