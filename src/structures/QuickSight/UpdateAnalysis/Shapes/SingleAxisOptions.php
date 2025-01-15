<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property YAxisOptions|null $YAxisOptions
 */
class SingleAxisOptions extends Shape
{
    /**
     * @param array{YAxisOptions?: YAxisOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
