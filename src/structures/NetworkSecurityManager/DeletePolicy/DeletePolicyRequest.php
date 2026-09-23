<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyIdentifier
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{policyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
