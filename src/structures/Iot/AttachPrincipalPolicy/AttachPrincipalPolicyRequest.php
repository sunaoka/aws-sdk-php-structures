<?php

namespace Sunaoka\Aws\Structures\Iot\AttachPrincipalPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyName
 * @property string $principal
 */
class AttachPrincipalPolicyRequest extends Request
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
