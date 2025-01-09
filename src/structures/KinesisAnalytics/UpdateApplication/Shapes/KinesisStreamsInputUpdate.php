<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceARNUpdate
 * @property string $RoleARNUpdate
 */
class KinesisStreamsInputUpdate extends Shape
{
    /**
     * @param array{
     *     ResourceARNUpdate?: string,
     *     RoleARNUpdate?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
