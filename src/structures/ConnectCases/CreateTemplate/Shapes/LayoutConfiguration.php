<?php

namespace Sunaoka\Aws\Structures\ConnectCases\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultLayout
 */
class LayoutConfiguration extends Shape
{
    /**
     * @param array{defaultLayout?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
