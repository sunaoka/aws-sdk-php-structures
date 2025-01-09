<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Host
 * @property int $Port
 * @property string $SqlEndpointPath
 */
class DatabricksParameters extends Shape
{
    /**
     * @param array{
     *     Host: string,
     *     Port: int,
     *     SqlEndpointPath: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
