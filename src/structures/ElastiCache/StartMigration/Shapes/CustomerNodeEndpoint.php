<?php

namespace Sunaoka\Aws\Structures\ElastiCache\StartMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $Port
 */
class CustomerNodeEndpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string,
     *     Port?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
