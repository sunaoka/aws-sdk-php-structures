<?php

namespace Sunaoka\Aws\Structures\CloudFront\GetRealtimeLogConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RoleARN
 * @property string $StreamARN
 */
class KinesisStreamConfig extends Shape
{
    /**
     * @param array{
     *     RoleARN: string,
     *     StreamARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
