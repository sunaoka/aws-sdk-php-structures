<?php

namespace Sunaoka\Aws\Structures\WAFV2\DeletePermissionPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class DeletePermissionPolicyRequest extends Request
{
    /**
     * @param array{ResourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
