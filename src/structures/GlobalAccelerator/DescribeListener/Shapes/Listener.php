<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListenerArn
 * @property list<PortRange> $PortRanges
 * @property 'TCP'|'UDP' $Protocol
 * @property 'NONE'|'SOURCE_IP' $ClientAffinity
 */
class Listener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string,
     *     PortRanges?: list<PortRange>,
     *     Protocol?: 'TCP'|'UDP',
     *     ClientAffinity?: 'NONE'|'SOURCE_IP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
