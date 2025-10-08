<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeInterconnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $secretARN
 * @property string|null $ckn
 * @property string|null $state
 * @property string|null $startOn
 */
class MacSecKey extends Shape
{
    /**
     * @param array{
     *     secretARN?: string|null,
     *     ckn?: string|null,
     *     state?: string|null,
     *     startOn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
