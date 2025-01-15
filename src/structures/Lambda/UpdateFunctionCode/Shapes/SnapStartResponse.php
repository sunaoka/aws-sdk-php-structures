<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionCode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublishedVersions'|'None'|null $ApplyOn
 * @property 'On'|'Off'|null $OptimizationStatus
 */
class SnapStartResponse extends Shape
{
    /**
     * @param array{
     *     ApplyOn?: 'PublishedVersions'|'None'|null,
     *     OptimizationStatus?: 'On'|'Off'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
