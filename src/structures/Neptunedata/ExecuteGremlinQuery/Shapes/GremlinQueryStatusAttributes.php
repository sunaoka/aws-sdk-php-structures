<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property int $code
 * @property Document $attributes
 */
class GremlinQueryStatusAttributes extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     code?: int,
     *     attributes?: Document
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
