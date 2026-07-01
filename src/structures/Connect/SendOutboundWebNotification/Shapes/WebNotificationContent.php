<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundWebNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WIDGET_VIEW'|'WIDGET_ACTION' $Type
 * @property string|null $ViewArn
 * @property ContentAttributes|null $Attributes
 */
class WebNotificationContent extends Shape
{
    /**
     * @param array{
     *     Type: 'WIDGET_VIEW'|'WIDGET_ACTION',
     *     ViewArn?: string|null,
     *     Attributes?: ContentAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
