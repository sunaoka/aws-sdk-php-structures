<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateFunctionConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PublishedVersions'|'None' $ApplyOn
 * @property 'On'|'Off' $OptimizationStatus
 */
class SnapStartResponse extends Shape
{
    /**
     * @param array{
     *     ApplyOn?: 'PublishedVersions'|'None',
     *     OptimizationStatus?: 'On'|'Off'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
