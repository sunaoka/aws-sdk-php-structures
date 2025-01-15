<?php

namespace Sunaoka\Aws\Structures\Ec2\DisableVpcClassicLinkDnsSupport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $VpcId
 */
class DisableVpcClassicLinkDnsSupportRequest extends Request
{
    /**
     * @param array{VpcId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
