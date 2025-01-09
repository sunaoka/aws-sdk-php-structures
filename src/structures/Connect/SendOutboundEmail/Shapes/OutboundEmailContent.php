<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TEMPLATE'|'RAW' $MessageSourceType
 * @property TemplatedMessageConfig $TemplatedMessageConfig
 * @property OutboundRawMessage $RawMessage
 */
class OutboundEmailContent extends Shape
{
    /**
     * @param array{
     *     MessageSourceType: 'TEMPLATE'|'RAW',
     *     TemplatedMessageConfig?: TemplatedMessageConfig,
     *     RawMessage?: OutboundRawMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
