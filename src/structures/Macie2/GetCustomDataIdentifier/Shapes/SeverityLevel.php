<?php

namespace Sunaoka\Aws\Structures\Macie2\GetCustomDataIdentifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $occurrencesThreshold
 * @property 'LOW'|'MEDIUM'|'HIGH' $severity
 */
class SeverityLevel extends Shape
{
    /**
     * @param array{
     *     occurrencesThreshold: int,
     *     severity: 'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
