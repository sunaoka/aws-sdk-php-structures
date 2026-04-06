<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $capabilityArns
 * @property list<string> $privateIpAddresses
 * @property list<string> $publicIpAddresses
 */
class DiscoveryData extends Shape
{
    /**
     * @param array{
     *     capabilityArns: list<string>,
     *     privateIpAddresses: list<string>,
     *     publicIpAddresses: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
