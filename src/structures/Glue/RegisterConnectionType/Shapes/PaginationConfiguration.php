<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CursorConfiguration|null $CursorConfiguration
 * @property OffsetConfiguration|null $OffsetConfiguration
 */
class PaginationConfiguration extends Shape
{
    /**
     * @param array{
     *     CursorConfiguration?: CursorConfiguration|null,
     *     OffsetConfiguration?: OffsetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
