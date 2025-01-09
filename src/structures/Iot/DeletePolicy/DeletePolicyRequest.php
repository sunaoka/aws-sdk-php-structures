<?php

namespace Sunaoka\Aws\Structures\Iot\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{policyName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
