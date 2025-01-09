<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\ExportForms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'first' $fixed
 * @property string $rightOf
 * @property string $below
 */
class FieldPosition extends Shape
{
    /**
     * @param array{
     *     fixed?: 'first',
     *     rightOf?: string,
     *     below?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
