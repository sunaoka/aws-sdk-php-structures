<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetAppMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CwLogEnabled
 * @property string|null $CwLogGroup
 */
class CwLog extends Shape
{
    /**
     * @param array{
     *     CwLogEnabled?: bool|null,
     *     CwLogGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
