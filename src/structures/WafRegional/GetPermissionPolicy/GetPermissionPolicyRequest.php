<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetPermissionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetPermissionPolicyRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
