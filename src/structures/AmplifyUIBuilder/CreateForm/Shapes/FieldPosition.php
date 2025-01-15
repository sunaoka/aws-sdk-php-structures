<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\CreateForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'first'|null $fixed
 * @property string|null $rightOf
 * @property string|null $below
 */
class FieldPosition extends Shape
{
    /**
     * @param array{
     *     fixed?: 'first'|null,
     *     rightOf?: string|null,
     *     below?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
