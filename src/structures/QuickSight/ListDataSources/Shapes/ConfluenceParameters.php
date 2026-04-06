<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ConfluenceUrl
 */
class ConfluenceParameters extends Shape
{
    /**
     * @param array{ConfluenceUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
