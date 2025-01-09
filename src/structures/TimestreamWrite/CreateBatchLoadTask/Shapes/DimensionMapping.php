<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceColumn
 * @property string $DestinationColumn
 */
class DimensionMapping extends Shape
{
    /**
     * @param array{
     *     SourceColumn?: string,
     *     DestinationColumn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
