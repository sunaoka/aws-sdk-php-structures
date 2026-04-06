<?php

namespace Sunaoka\Aws\Structures\EKS\DisassociateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property string $policyArn
 */
class DisassociateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     policyArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
