<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Size
 * @property 'FIRST_N'|'LAST_N'|'RANDOM' $Type
 */
class Sample extends Shape
{
    /**
     * @param array{
     *     Size?: int,
     *     Type: 'FIRST_N'|'LAST_N'|'RANDOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
