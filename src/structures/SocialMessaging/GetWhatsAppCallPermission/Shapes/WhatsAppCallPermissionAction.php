<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppCallPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $actionName
 * @property bool $canPerformAction
 * @property list<WhatsAppCallPermissionLimit> $limits
 */
class WhatsAppCallPermissionAction extends Shape
{
    /**
     * @param array{
     *     actionName: string,
     *     canPerformAction: bool,
     *     limits: list<WhatsAppCallPermissionLimit>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
