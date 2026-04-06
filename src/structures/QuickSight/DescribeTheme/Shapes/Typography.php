<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Font>|null $FontFamilies
 */
class Typography extends Shape
{
    /**
     * @param array{FontFamilies?: list<Font>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
