<?php

namespace Sunaoka\Aws\Structures\finspace\UpdateKxClusterCodeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class KxCommandLineArgument extends Shape
{
    /**
     * @param array{
     *     key?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
