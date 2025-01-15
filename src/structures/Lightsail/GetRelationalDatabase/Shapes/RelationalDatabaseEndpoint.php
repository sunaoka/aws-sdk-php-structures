<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetRelationalDatabase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $port
 * @property string|null $address
 */
class RelationalDatabaseEndpoint extends Shape
{
    /**
     * @param array{
     *     port?: int|null,
     *     address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
