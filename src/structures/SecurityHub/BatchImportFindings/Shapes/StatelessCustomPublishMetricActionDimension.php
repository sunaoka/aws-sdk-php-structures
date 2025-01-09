<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class StatelessCustomPublishMetricActionDimension extends Shape
{
    /**
     * @param array{Value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
