<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{policyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
