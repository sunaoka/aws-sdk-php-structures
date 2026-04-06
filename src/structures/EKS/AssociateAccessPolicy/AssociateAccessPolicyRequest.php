<?php

namespace Sunaoka\Aws\Structures\EKS\AssociateAccessPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clusterName
 * @property string $principalArn
 * @property string $policyArn
 * @property Shapes\AccessScope $accessScope
 */
class AssociateAccessPolicyRequest extends Request
{
    /**
     * @param array{
     *     clusterName: string,
     *     principalArn: string,
     *     policyArn: string,
     *     accessScope: Shapes\AccessScope
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
