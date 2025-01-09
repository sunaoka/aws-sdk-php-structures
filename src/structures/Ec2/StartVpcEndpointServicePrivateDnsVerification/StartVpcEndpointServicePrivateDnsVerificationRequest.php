<?php

namespace Sunaoka\Aws\Structures\Ec2\StartVpcEndpointServicePrivateDnsVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $ServiceId
 */
class StartVpcEndpointServicePrivateDnsVerificationRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     ServiceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
