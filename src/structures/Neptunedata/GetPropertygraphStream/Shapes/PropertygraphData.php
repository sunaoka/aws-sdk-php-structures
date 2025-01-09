<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $type
 * @property string $key
 * @property Document $value
 * @property string $from
 * @property string $to
 */
class PropertygraphData extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: string,
     *     key: string,
     *     value: Document,
     *     from?: string,
     *     to?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
