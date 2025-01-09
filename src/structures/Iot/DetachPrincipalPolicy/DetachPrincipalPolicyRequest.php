<?php

namespace Sunaoka\Aws\Structures\Iot\DetachPrincipalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $principal
 */
class DetachPrincipalPolicyRequest extends Request
{
    /**
     * @param array{
     *     policyName: string,
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
