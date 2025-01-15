<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CompleteMigration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Address
 * @property int|null $Port
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address?: string|null,
     *     Port?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
