<?php

namespace Sunaoka\Aws\Structures\Odb\CreateAutonomousDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ttsBundleUrl
 */
class TransportableTablespace extends Shape
{
    /**
     * @param array{ttsBundleUrl?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
