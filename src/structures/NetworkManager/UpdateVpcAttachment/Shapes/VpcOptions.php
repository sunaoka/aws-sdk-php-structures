<?php

namespace Sunaoka\Aws\Structures\NetworkManager\UpdateVpcAttachment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Ipv6Support
 * @property bool|null $ApplianceModeSupport
 * @property bool|null $DnsSupport
 * @property bool|null $SecurityGroupReferencingSupport
 */
class VpcOptions extends Shape
{
    /**
     * @param array{
     *     Ipv6Support?: bool|null,
     *     ApplianceModeSupport?: bool|null,
     *     DnsSupport?: bool|null,
     *     SecurityGroupReferencingSupport?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
