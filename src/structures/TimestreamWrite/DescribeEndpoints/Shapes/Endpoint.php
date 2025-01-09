<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Address
 * @property int $CachePeriodInMinutes
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Address: string,
     *     CachePeriodInMinutes: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
