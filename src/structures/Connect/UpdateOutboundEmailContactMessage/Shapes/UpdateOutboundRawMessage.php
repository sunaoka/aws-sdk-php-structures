<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateOutboundEmailContactMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Body
 * @property string $ContentType
 */
class UpdateOutboundRawMessage extends Shape
{
    /**
     * @param array{
     *     Body: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
