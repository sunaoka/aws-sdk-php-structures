<?php

namespace Sunaoka\Aws\Structures\ConnectCases\UpdateRelatedItem\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1051200> $targetSlaMinutes
 */
class SlaUpdateConfiguration extends Shape
{
    /**
     * @param array{targetSlaMinutes: int<1, 1051200>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
