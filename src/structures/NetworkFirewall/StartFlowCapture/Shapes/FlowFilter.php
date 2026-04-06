<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowCapture\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Address|null $SourceAddress
 * @property Address|null $DestinationAddress
 * @property string|null $SourcePort
 * @property string|null $DestinationPort
 * @property list<string>|null $Protocols
 */
class FlowFilter extends Shape
{
    /**
     * @param array{
     *     SourceAddress?: Address|null,
     *     DestinationAddress?: Address|null,
     *     SourcePort?: string|null,
     *     DestinationPort?: string|null,
     *     Protocols?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
