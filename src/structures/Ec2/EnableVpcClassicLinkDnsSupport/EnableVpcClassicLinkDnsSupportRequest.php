<?php

namespace Sunaoka\Aws\Structures\Ec2\EnableVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 */
class EnableVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{VpcId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
