<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Duration
 * @property string $Id
 * @property string $StartTimestamp
 * @property string $StopTimestamp
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Duration?: int,
     *     Id: string,
     *     StartTimestamp: string,
     *     StopTimestamp?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
