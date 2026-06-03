<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $entityType
 * @property string $id
 * @property string $canSendMessage
 */
class MetaFlowHealthEntity extends Shape
{
    /**
     * @param array{
     *     entityType: string,
     *     id: string,
     *     canSendMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
