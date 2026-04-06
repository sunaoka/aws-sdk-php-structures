<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $publicIpAddresses
 * @property list<string> $privateIpAddresses
 * @property list<string> $capabilityArns
 */
class DiscoveryData extends Shape
{
    /**
     * @param array{
     *     publicIpAddresses: list<string>,
     *     privateIpAddresses: list<string>,
     *     capabilityArns: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
