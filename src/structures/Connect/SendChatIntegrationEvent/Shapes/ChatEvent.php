<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCONNECT'|'MESSAGE'|'EVENT' $Type
 * @property string $ContentType
 * @property string $Content
 */
class ChatEvent extends Shape
{
    /**
     * @param array{
     *     Type: 'DISCONNECT'|'MESSAGE'|'EVENT',
     *     ContentType?: string,
     *     Content?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
