<?php

namespace Sunaoka\Aws\Structures\QuickSight\PutDataSetRefreshProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RefreshConfiguration $RefreshConfiguration
 */
class DataSetRefreshProperties extends Shape
{
    /**
     * @param array{RefreshConfiguration: RefreshConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
