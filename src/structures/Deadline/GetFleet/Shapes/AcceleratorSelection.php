<?php

namespace Sunaoka\Aws\Structures\Deadline\GetFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 't4'|'a10g'|'l4'|'l40s' $name
 * @property string $runtime
 */
class AcceleratorSelection extends Shape
{
    /**
     * @param array{
     *     name: 't4'|'a10g'|'l4'|'l40s',
     *     runtime?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
