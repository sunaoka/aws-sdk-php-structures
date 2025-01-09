<?php

namespace Sunaoka\Aws\Structures\RecycleBin\LockRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $UnlockDelayValue
 * @property 'DAYS' $UnlockDelayUnit
 */
class UnlockDelay extends Shape
{
    /**
     * @param array{
     *     UnlockDelayValue: int,
     *     UnlockDelayUnit: 'DAYS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
