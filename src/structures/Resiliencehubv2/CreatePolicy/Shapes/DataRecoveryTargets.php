<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $timeBetweenBackupsInMinutes
 */
class DataRecoveryTargets extends Shape
{
    /**
     * @param array{timeBetweenBackupsInMinutes?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
