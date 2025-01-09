<?php

namespace Sunaoka\Aws\Structures\RecycleBin\LockRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property UnlockDelay $UnlockDelay
 */
class LockConfiguration extends Shape
{
    /**
     * @param array{UnlockDelay: UnlockDelay} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
