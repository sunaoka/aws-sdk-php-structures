<?php

namespace Sunaoka\Aws\Structures\XRay\GetTraceGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<string> $Names
 * @property string $Type
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Names?: list<string>,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
