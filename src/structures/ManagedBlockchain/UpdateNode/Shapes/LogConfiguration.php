<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\UpdateNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 */
class LogConfiguration extends Shape
{
    /**
     * @param array{Enabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
