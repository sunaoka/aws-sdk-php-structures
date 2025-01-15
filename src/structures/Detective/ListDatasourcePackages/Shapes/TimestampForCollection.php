<?php

namespace Sunaoka\Aws\Structures\Detective\ListDatasourcePackages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 */
class TimestampForCollection extends Shape
{
    /**
     * @param array{Timestamp?: \Aws\Api\DateTimeResult|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
