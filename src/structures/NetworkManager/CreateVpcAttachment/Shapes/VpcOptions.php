<?php

namespace Sunaoka\Aws\Structures\NetworkManager\CreateVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Ipv6Support
 * @property bool|null $ApplianceModeSupport
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     Ipv6Support?: bool|null,
     *     ApplianceModeSupport?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
