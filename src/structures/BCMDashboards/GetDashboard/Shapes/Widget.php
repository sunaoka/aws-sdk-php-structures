<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string $title
 * @property string|null $description
 * @property int<2, 6>|null $width
 * @property int<4, 10>|null $height
 * @property int|null $horizontalOffset
 * @property list<WidgetConfig> $configs
 */
class Widget extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     title: string,
     *     description?: string|null,
     *     width?: int<2, 6>|null,
     *     height?: int<4, 10>|null,
     *     horizontalOffset?: int|null,
     *     configs: list<WidgetConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
