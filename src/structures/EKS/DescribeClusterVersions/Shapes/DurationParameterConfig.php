<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeClusterVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $defaultValue
 * @property DurationConstraints|null $constraints
 */
class DurationParameterConfig extends Shape
{
    /**
     * @param array{
     *     defaultValue?: string|null,
     *     constraints?: DurationConstraints|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
