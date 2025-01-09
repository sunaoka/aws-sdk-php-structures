<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\RunPipelineActivity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, string> $attributes
 * @property string $next
 */
class AddAttributesActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attributes: array<string, string>,
     *     next?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
