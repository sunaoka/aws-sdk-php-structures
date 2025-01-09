<?php

namespace Sunaoka\Aws\Structures\FSx\StartMisconfiguredStateRecovery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED' $Type
 * @property int $Value
 */
class RetentionPeriod extends Shape
{
    /**
     * @param array{
     *     Type: 'SECONDS'|'MINUTES'|'HOURS'|'DAYS'|'MONTHS'|'YEARS'|'INFINITE'|'UNSPECIFIED',
     *     Value?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
