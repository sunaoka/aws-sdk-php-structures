<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CwLogEnabled
 * @property string $CwLogGroup
 */
class CwLog extends Shape
{
    /**
     * @param array{
     *     CwLogEnabled?: bool,
     *     CwLogGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
