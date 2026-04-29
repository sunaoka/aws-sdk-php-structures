<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 't4'|'a10g'|'l4'|'l40s'|'rtx-pro-server-6000' $name
 * @property string|null $runtime
 */
class AcceleratorSelection extends Shape
{
    /**
     * @param array{
     *     name: 't4'|'a10g'|'l4'|'l40s'|'rtx-pro-server-6000',
     *     runtime?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
