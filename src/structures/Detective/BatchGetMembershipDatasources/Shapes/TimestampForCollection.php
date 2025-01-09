<?php

namespace Sunaoka\Aws\Structures\Detective\BatchGetMembershipDatasources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Timestamp
 */
class TimestampForCollection extends Shape
{
    /**
     * @param array{Timestamp?: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
