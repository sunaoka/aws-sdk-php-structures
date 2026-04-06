<?php

namespace Sunaoka\Aws\Structures\Neptunedata\ExecuteFastReset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $token
 */
class FastResetToken extends Shape
{
    /**
     * @param array{token?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
