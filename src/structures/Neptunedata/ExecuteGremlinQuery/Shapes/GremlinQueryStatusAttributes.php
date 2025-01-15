<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteGremlinQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property int|null $code
 * @property Document|null $attributes
 */
class GremlinQueryStatusAttributes extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     code?: int|null,
     *     attributes?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
