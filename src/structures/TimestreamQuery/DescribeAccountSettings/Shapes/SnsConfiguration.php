<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\DescribeAccountSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 */
class SnsConfiguration extends Shape
{
    /**
     * @param array{TopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
