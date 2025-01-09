<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeScheduledQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SnsConfiguration $SnsConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{SnsConfiguration: SnsConfiguration} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
