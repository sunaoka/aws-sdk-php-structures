<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 5000>|null $Size
 * @property 'FIRST_N'|'LAST_N'|'RANDOM' $Type
 */
class Sample extends Shape
{
    /**
     * @param array{
     *     Size?: int<1, 5000>|null,
     *     Type: 'FIRST_N'|'LAST_N'|'RANDOM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
