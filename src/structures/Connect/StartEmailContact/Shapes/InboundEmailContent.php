<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RAW' $MessageSourceType
 * @property InboundRawMessage|null $RawMessage
 */
class InboundEmailContent extends Shape
{
    /**
     * @param array{
     *     MessageSourceType: 'RAW',
     *     RawMessage?: InboundRawMessage|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
