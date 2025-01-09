<?php

namespace Sunaoka\Aws\Structures\FSx\ReleaseFileSystemNfsV3Locks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'NONE' $Type
 * @property int $Value
 */
class AutocommitPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'NONE',
     *     Value?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
