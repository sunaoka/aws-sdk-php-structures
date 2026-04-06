<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\CreateSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'encryption'|'network' $type
 * @property string $name
 * @property string|null $description
 * @property string $policy
 * @property string|null $clientToken
 */
class CreateSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'encryption'|'network',
     *     name: string,
     *     description?: string|null,
     *     policy: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
