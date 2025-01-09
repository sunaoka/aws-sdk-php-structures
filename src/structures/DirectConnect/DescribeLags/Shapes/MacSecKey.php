<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeLags\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretARN
 * @property string $ckn
 * @property string $state
 * @property string $startOn
 */
class MacSecKey extends Shape
{
    /**
     * @param array{
     *     secretARN?: string,
     *     ckn?: string,
     *     state?: string,
     *     startOn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
