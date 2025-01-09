<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultLayout
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{defaultLayout?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
