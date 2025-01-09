<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Files
 */
class ThreatsDetectedItemCount extends Shape
{
    /**
     * @param array{Files?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
