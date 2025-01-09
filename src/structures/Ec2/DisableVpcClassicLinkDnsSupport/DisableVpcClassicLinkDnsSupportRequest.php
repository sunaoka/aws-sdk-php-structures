<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcId
 */
class DisableVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{VpcId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
