<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RAW' $MessageSourceType
 * @property InboundRawMessage $RawMessage
 */
class InboundEmailContent extends Shape
{
    /**
     * @param array{
     *     MessageSourceType: 'RAW',
     *     RawMessage?: InboundRawMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
