<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingListener;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property list<Shapes\PortRange> $PortRanges
 * @property string $IdempotencyToken
 */
class CreateCustomRoutingListenerRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     PortRanges: list<Shapes\PortRange>,
     *     IdempotencyToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
