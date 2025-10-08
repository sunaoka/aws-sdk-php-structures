<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateCodeSecurityScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WEEKLY'|'MONTHLY'|'NEVER'|null $frequency
 * @property string|null $frequencyExpression
 */
class PeriodicScanConfiguration extends Shape
{
    /**
     * @param array{
     *     frequency?: 'WEEKLY'|'MONTHLY'|'NEVER'|null,
     *     frequencyExpression?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
