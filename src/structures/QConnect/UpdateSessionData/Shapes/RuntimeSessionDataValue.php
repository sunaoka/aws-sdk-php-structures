<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stringValue
 */
class RuntimeSessionDataValue extends Shape
{
    /**
     * @param array{stringValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
