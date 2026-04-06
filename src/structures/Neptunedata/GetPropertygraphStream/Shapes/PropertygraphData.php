<?php

namespace Sunaoka\Aws\Structures\Neptunedata\GetPropertygraphStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $type
 * @property string $key
 * @property Document $value
 * @property string|null $from
 * @property string|null $to
 */
class PropertygraphData extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     type: string,
     *     key: string,
     *     value: Document,
     *     from?: string|null,
     *     to?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
