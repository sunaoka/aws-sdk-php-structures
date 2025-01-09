<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\PortRange> $PortRanges
 * @property 'TCP'|'UDP' $Protocol
 * @property 'NONE'|'SOURCE_IP' $ClientAffinity
 */
class UpdateListenerRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     PortRanges?: list<Shapes\PortRange>,
     *     Protocol?: 'TCP'|'UDP',
     *     ClientAffinity?: 'NONE'|'SOURCE_IP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
