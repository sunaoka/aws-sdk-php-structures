<?php

namespace Sunaoka\Aws\Structures\ConfigService\DescribeConformancePacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string|null $TagValue
 */
class ConformancePackScope extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     TagValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
