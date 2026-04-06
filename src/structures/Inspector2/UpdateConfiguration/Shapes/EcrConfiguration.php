<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'LIFETIME'|'DAYS_30'|'DAYS_180' $rescanDuration
 */
class EcrConfiguration extends Shape
{
    /**
     * @param array{rescanDuration: 'LIFETIME'|'DAYS_30'|'DAYS_180'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
