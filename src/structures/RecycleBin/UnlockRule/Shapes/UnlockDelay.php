<?php

namespace Sunaoka\Aws\Structures\RecycleBin\UnlockRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<7, 30> $UnlockDelayValue
 * @property 'DAYS' $UnlockDelayUnit
 */
class UnlockDelay extends Shape
{
    /**
     * @param array{
     *     UnlockDelayValue: int<7, 30>,
     *     UnlockDelayUnit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
