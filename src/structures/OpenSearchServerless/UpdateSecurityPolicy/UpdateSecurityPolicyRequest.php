<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property string $policyVersion
 * @property 'encryption'|'network' $type
 */
class UpdateSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy?: string,
     *     policyVersion: string,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
