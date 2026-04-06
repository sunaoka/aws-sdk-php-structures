<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kinesisRoleArn
 * @property string $kinesisDataStreamArn
 */
class KinesisDataStreamData extends Shape
{
    /**
     * @param array{
     *     kinesisRoleArn: string,
     *     kinesisDataStreamArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
