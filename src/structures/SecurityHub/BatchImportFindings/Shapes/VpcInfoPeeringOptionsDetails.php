<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowDnsResolutionFromRemoteVpc
 * @property bool $AllowEgressFromLocalClassicLinkToRemoteVpc
 * @property bool $AllowEgressFromLocalVpcToRemoteClassicLink
 */
class VpcInfoPeeringOptionsDetails extends Shape
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
