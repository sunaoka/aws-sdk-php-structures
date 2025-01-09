<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $productCodeId
 * @property 'ENABLED'|'DISABLED' $productCodeMode
 */
class ProductCode extends Shape
{
    /**
     * @param array{
     *     productCodeId?: string,
     *     productCodeMode?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
