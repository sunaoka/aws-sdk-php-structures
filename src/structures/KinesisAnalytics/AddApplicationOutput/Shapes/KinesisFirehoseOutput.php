<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\AddApplicationOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARN
 * @property string $RoleARN
 */
class KinesisFirehoseOutput extends Shape
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     RoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
