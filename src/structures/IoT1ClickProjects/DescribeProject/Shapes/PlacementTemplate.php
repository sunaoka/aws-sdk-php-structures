<?php

namespace Sunaoka\Aws\Structures\IoT1ClickProjects\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $defaultAttributes
 * @property array<string, DeviceTemplate> $deviceTemplates
 */
class PlacementTemplate extends Shape
{
    /**
     * @param array{
     *     defaultAttributes?: array<string, string>,
     *     deviceTemplates?: array<string, DeviceTemplate>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
