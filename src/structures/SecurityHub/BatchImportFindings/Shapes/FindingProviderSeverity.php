<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null $Label
 * @property string|null $Original
 */
class FindingProviderSeverity extends Shape
{
    /**
     * @param array{
     *     Label?: 'INFORMATIONAL'|'LOW'|'MEDIUM'|'HIGH'|'CRITICAL'|null,
     *     Original?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
