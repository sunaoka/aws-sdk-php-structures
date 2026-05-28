<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
