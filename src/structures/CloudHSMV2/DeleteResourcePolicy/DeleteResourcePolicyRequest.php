<?php

namespace Sunaoka\Aws\Structures\CloudHSMV2\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
