<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateSnapshotPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE' $Type
 * @property int<0, 65535>|null $Value
 */
class SnapshotPolicyRetentionPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE',
     *     Value?: int<0, 65535>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
