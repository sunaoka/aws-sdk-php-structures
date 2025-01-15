<?php

namespace Sunaoka\Aws\Structures\drs\DescribeJobLogItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $productCodeId
 * @property 'ENABLED'|'DISABLED'|null $productCodeMode
 */
class ProductCode extends Shape
{
    /**
     * @param array{
     *     productCodeId?: string|null,
     *     productCodeMode?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
