<?php

namespace Sunaoka\Aws\Structures\IAMToolbox\GetRequestAuthorizationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $authorizationId
 * @property string $policyUri
 */
class GetRequestAuthorizationPolicyRequest extends Request
{
    /**
     * @param array{
     *     authorizationId: string,
     *     policyUri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
