<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 */
class AwsNetworkFirewallFirewallSubnetMappingsDetails extends Shape
{
    /**
     * @param array{SubnetId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
