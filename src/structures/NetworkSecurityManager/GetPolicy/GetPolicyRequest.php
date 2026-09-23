<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyIdentifier
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{policyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
