<?php

namespace Sunaoka\Aws\Structures\Iot\AttachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $target
 */
class AttachPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
