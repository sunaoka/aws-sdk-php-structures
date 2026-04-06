<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\UpdateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $defaultAttributes
 * @property array<string, DeviceTemplate>|null $deviceTemplates
 */
class PlacementTemplate extends Shape
{
    /**
     * @param array{
     *     defaultAttributes?: array<string, string>|null,
     *     deviceTemplates?: array<string, DeviceTemplate>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
