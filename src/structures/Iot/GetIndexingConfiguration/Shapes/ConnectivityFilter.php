<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'GET_THING_CONNECTIVITY_DATA'>|null $includeSocketInformation
 */
class ConnectivityFilter extends Shape
{
    /**
     * @param array{includeSocketInformation?: list<'GET_THING_CONNECTIVITY_DATA'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
