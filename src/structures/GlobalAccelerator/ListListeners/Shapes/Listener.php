<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListListeners\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListenerArn
 * @property list<PortRange>|null $PortRanges
 * @property 'TCP'|'UDP'|null $Protocol
 * @property 'NONE'|'SOURCE_IP'|null $ClientAffinity
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string|null,
     *     PortRanges?: list<PortRange>|null,
     *     Protocol?: 'TCP'|'UDP'|null,
     *     ClientAffinity?: 'NONE'|'SOURCE_IP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
