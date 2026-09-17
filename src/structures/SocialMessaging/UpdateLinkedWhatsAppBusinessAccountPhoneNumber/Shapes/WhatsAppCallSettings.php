<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\UpdateLinkedWhatsAppBusinessAccountPhoneNumber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $callEnabled
 * @property WhatsAppCallHours|null $callHours
 * @property string|null $callIconVisibility
 * @property string|null $callbackPermissionStatus
 */
class WhatsAppCallSettings extends Shape
{
    /**
     * @param array{
     *     callEnabled: bool,
     *     callHours?: WhatsAppCallHours|null,
     *     callIconVisibility?: string|null,
     *     callbackPermissionStatus?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
