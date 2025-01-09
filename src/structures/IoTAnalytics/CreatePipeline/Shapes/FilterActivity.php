<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $filter
 * @property string $next
 */
class FilterActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     filter: string,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
