<?php

namespace Sunaoka\Aws\Structures\Glacier\GetDataRetrievalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Strategy
 * @property int $BytesPerHour
 */
class DataRetrievalRule extends Shape
{
    /**
     * @param array{
     *     Strategy?: string,
     *     BytesPerHour?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
