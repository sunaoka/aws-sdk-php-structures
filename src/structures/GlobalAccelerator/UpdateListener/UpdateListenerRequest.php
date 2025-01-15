<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ListenerArn
 * @property list<Shapes\PortRange>|null $PortRanges
 * @property 'TCP'|'UDP'|null $Protocol
 * @property 'NONE'|'SOURCE_IP'|null $ClientAffinity
 */
class UpdateListenerRequest extends Request
{
    /**
     * @param array{
     *     ListenerArn: string,
     *     PortRanges?: list<Shapes\PortRange>|null,
     *     Protocol?: 'TCP'|'UDP'|null,
     *     ClientAffinity?: 'NONE'|'SOURCE_IP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
