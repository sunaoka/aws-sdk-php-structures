<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateAutomationRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 100> $Normalized
 * @property double $Product
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $Label
 */
class SeverityUpdate extends Shape
{
    /**
     * @param array{
     *     Normalized?: int<0, 100>,
     *     Product?: double,
     *     Label?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
