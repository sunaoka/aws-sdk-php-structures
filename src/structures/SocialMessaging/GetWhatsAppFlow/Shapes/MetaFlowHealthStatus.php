<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $canSendMessage
 * @property list<MetaFlowHealthEntity>|null $entities
 */
class MetaFlowHealthStatus extends Shape
{
    /**
     * @param array{
     *     canSendMessage: string,
     *     entities?: list<MetaFlowHealthEntity>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
