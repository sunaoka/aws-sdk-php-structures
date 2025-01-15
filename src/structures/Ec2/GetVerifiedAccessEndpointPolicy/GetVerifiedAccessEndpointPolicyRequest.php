<?php

namespace Sunaoka\Aws\Structures\Ec2\GetVerifiedAccessEndpointPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VerifiedAccessEndpointId
 * @property bool|null $DryRun
 */
class GetVerifiedAccessEndpointPolicyRequest extends Request
{
    /**
     * @param array{
     *     VerifiedAccessEndpointId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
