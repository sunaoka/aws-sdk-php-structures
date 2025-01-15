<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $filter
 * @property string|null $next
 */
class FilterActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     filter: string,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
