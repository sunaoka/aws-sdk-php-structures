<?php

namespace Sunaoka\Aws\Structures\Interconnect\ListEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $available
 * @property list<string>|null $supported
 */
class Bandwidths extends Shape
{
    /**
     * @param array{
     *     available?: list<string>|null,
     *     supported?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
