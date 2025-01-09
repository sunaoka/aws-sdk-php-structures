<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchUpdateFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Normalized
 * @property double $Product
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL' $Label
 */
class SeverityUpdate extends Shape
{
    /**
     * @param array{
     *     Normalized?: int,
     *     Product?: double,
     *     Label?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
