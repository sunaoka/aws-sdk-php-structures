<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Ipv6Support
 * @property bool $ApplianceModeSupport
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     Ipv6Support?: bool,
     *     ApplianceModeSupport?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
