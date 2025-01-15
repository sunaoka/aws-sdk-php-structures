<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Duration
 * @property string $Id
 * @property string $StartTimestamp
 * @property string|null $StopTimestamp
 */
class Session extends Shape
{
    /**
     * @param array{
     *     Duration?: int|null,
     *     Id: string,
     *     StartTimestamp: string,
     *     StopTimestamp?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
