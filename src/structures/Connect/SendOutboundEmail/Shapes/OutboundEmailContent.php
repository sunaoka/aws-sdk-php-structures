<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEMPLATE'|'RAW' $MessageSourceType
 * @property TemplatedMessageConfig|null $TemplatedMessageConfig
 * @property OutboundRawMessage|null $RawMessage
 */
class OutboundEmailContent extends Shape
{
    /**
     * @param array{
     *     MessageSourceType: 'TEMPLATE'|'RAW',
     *     TemplatedMessageConfig?: TemplatedMessageConfig|null,
     *     RawMessage?: OutboundRawMessage|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
