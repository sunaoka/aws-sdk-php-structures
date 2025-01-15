<?php

namespace Sunaoka\Aws\Structures\Glacier\GetDataRetrievalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Strategy
 * @property int|null $BytesPerHour
 */
class DataRetrievalRule extends Shape
{
    /**
     * @param array{
     *     Strategy?: string|null,
     *     BytesPerHour?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
