<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $link
 * @property string $name
 * @property string $id
 */
class MetaFlowApplicationInfo extends Shape
{
    /**
     * @param array{
     *     link?: string|null,
     *     name: string,
     *     id: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
