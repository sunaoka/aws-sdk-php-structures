<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\PortRange> $PortRanges
 */
class UpdateCustomRoutingListenerRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     PortRanges: list<Shapes\PortRange>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
