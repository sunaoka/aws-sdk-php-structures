<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $clientToken
 * @property string $description
 * @property string $name
 * @property string $policy
 * @property 'encryption'|'network' $type
 */
class CreateSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string,
     *     description?: string,
     *     name: string,
     *     policy: string,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
