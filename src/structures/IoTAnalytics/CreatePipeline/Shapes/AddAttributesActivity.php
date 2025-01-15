<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property array<string, string> $attributes
 * @property string|null $next
 */
class AddAttributesActivity extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     attributes: array<string, string>,
     *     next?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
