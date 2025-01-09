<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowDnsResolutionFromRemoteVpc
 * @property bool $AllowEgressFromLocalClassicLinkToRemoteVpc
 * @property bool $AllowEgressFromLocalVpcToRemoteClassicLink
 */
class VpcPeeringConnectionOptionsDescription extends Shape
{
    /**
     * @param array{
     *     AllowDnsResolutionFromRemoteVpc?: bool,
     *     AllowEgressFromLocalClassicLinkToRemoteVpc?: bool,
     *     AllowEgressFromLocalVpcToRemoteClassicLink?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
