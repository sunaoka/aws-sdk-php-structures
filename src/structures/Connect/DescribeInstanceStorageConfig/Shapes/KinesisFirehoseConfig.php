<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeInstanceStorageConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirehoseArn
 */
class KinesisFirehoseConfig extends Shape
{
    /**
     * @param array{FirehoseArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
