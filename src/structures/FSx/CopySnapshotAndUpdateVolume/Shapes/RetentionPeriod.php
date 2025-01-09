<?php

namespace Sunaoka\Aws\Structures\FSx\CopySnapshotAndUpdateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED' $Type
 * @property int<0, 65535> $Value
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED',
     *     Value?: int<0, 65535>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
