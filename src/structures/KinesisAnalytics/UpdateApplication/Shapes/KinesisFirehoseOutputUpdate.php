<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceARNUpdate
 * @property string|null $RoleARNUpdate
 */
class KinesisFirehoseOutputUpdate extends Shape
{
    /**
     * @param array{
     *     ResourceARNUpdate?: string|null,
     *     RoleARNUpdate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
