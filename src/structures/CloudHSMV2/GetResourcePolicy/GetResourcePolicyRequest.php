<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
