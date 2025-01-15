<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Prefix
 * @property string|null $Suffix
 */
class NegativeFormat extends Shape
{
    /**
     * @param array{
     *     Prefix?: string|null,
     *     Suffix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
