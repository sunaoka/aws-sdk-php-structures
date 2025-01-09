<?php

namespace Sunaoka\Aws\Structures\Ecr\PutRegistryPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyText
 */
class PutRegistryPolicyRequest extends Request
{
    /**
     * @param array{policyText: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
