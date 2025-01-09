<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property list<Shapes\PortRange> $PortRanges
 * @property 'TCP'|'UDP' $Protocol
 * @property 'NONE'|'SOURCE_IP' $ClientAffinity
 * @property string $IdempotencyToken
 */
class CreateListenerRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     PortRanges: list<Shapes\PortRange>,
     *     Protocol: 'TCP'|'UDP',
     *     ClientAffinity?: 'NONE'|'SOURCE_IP',
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
