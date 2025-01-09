<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CwLog $CwLog
 */
class DataStorage extends Shape
{
    /**
     * @param array{CwLog?: CwLog} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
