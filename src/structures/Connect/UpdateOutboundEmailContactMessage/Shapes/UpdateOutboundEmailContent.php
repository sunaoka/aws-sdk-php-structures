<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateOutboundEmailContactMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RAW' $MessageSourceType
 * @property UpdateOutboundRawMessage $RawMessage
 */
class UpdateOutboundEmailContent extends Shape
{
    /**
     * @param array{
     *     MessageSourceType: 'RAW',
     *     RawMessage: UpdateOutboundRawMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
