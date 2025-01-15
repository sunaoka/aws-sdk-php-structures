<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISCONNECT'|'MESSAGE'|'EVENT' $Type
 * @property string|null $ContentType
 * @property string|null $Content
 */
class ChatEvent extends Shape
{
    /**
     * @param array{
     *     Type: 'DISCONNECT'|'MESSAGE'|'EVENT',
     *     ContentType?: string|null,
     *     Content?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
