<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $name
 * @property string|null $currency
 * @property string|null $timezoneId
 * @property string|null $messageTemplateNamespace
 */
class MetaFlowWhatsAppBusinessAccountInfo extends Shape
{
    /**
     * @param array{
     *     id: string,
     *     name: string,
     *     currency?: string|null,
     *     timezoneId?: string|null,
     *     messageTemplateNamespace?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
