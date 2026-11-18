<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcPeeringConnectionOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowDnsResolutionFromRemoteVpc
 * @property bool|null $AllowEgressFromLocalClassicLinkToRemoteVpc
 * @property bool|null $AllowEgressFromLocalVpcToRemoteClassicLink
 * @property bool|null $AllowMultipathResilience
 * @property 'always-on'|null $MultipathResilienceMode
 */
class PeeringConnectionOptionsRequest extends Shape
{
    /**
     * @param array{
     *     AllowDnsResolutionFromRemoteVpc?: bool|null,
     *     AllowEgressFromLocalClassicLinkToRemoteVpc?: bool|null,
     *     AllowEgressFromLocalVpcToRemoteClassicLink?: bool|null,
     *     AllowMultipathResilience?: bool|null,
     *     MultipathResilienceMode?: 'always-on'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
