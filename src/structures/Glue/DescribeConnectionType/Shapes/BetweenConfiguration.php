<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LowBoundKey
 * @property string|null $HighBoundKey
 * @property string|null $Template
 */
class BetweenConfiguration extends Shape
{
    /**
     * @param array{
     *     LowBoundKey?: string|null,
     *     HighBoundKey?: string|null,
     *     Template?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
