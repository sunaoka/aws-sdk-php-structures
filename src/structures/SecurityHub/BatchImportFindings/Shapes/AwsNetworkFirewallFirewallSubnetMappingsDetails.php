<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 */
class AwsNetworkFirewallFirewallSubnetMappingsDetails extends Shape
{
    /**
     * @param array{SubnetId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
