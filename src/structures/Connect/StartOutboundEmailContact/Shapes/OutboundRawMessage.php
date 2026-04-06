<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Subject
 * @property string $Body
 * @property string $ContentType
 */
class OutboundRawMessage extends Shape
{
    /**
     * @param array{
     *     Subject: string,
     *     Body: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
