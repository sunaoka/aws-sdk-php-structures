<?php

namespace Sunaoka\Aws\Structures\ConnectScheduling\PutTimeOffBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-52560000, 52560000> $Value
 * @property 'MINUTES'|'HOURS'|'DAYS' $Unit
 */
class Duration extends Shape
{
    /**
     * @param array{
     *     Value: int<-52560000, 52560000>,
     *     Unit: 'MINUTES'|'HOURS'|'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
