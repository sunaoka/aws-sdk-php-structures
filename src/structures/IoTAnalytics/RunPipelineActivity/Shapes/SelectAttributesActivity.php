<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property list<string> $attributes
 * @property string $next
 */
class SelectAttributesActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attributes: list<string>,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
