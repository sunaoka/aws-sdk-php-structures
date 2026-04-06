<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<string>|null $Names
 * @property string|null $Type
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Names?: list<string>|null,
     *     Type?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
