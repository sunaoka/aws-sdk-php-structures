<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WidgetId
 * @property string $ProfileId
 */
class WidgetDestination extends Shape
{
    /**
     * @param array{
     *     WidgetId: string,
     *     ProfileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
