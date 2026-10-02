<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\SendNotifyCodeVerification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $whatsAppTemplateName
 * @property string|null $languageCode
 */
class WhatsAppParameters extends Shape
{
    /**
     * @param array{
     *     whatsAppTemplateName?: string|null,
     *     languageCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
