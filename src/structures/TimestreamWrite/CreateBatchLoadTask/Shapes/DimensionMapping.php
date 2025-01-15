<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceColumn
 * @property string|null $DestinationColumn
 */
class DimensionMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumn?: string|null,
     *     DestinationColumn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
