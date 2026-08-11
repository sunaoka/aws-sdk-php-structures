<?php

namespace Sunaoka\Aws\Structures\Connect\CreateMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MATCHES_ANY'|'MATCHES_NONE' $Comparison
 * @property list<string> $Values
 */
class MetricFilterStringCondition extends Shape
{
    /**
     * @param array{
     *     Comparison: 'MATCHES_ANY'|'MATCHES_NONE',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
