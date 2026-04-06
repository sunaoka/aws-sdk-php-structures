<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallArn
 */
class DescribeFirewallMetadataRequest extends Request
{
    /**
     * @param array{FirewallArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
