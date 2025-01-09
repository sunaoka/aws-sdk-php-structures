<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $port
 * @property string $address
 */
class RelationalDatabaseEndpoint extends Shape
{
    /**
     * @param array{
     *     port?: int,
     *     address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
