<?php

namespace Sunaoka\Aws\Structures\QConnect\UpdateSessionData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property RuntimeSessionDataValue $value
 */
class RuntimeSessionData extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: RuntimeSessionDataValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
