<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Product
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Label
 * @property int|null $Normalized
 * @property string|null $Original
 */
class Severity extends Shape
{
    /**
     * @param array{
     *     Product?: double|null,
     *     Label?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     Normalized?: int|null,
     *     Original?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
