<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\UpdateSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'encryption'|'network' $type
 * @property string $name
 * @property string $policyVersion
 * @property string|null $description
 * @property string|null $policy
 * @property string|null $clientToken
 */
class UpdateSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'encryption'|'network',
     *     name: string,
     *     policyVersion: string,
     *     description?: string|null,
     *     policy?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
