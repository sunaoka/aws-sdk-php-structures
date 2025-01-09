<?php

namespace Sunaoka\Aws\Structures\Iot\DetachPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $target
 */
class DetachPolicyRequest extends Request
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
