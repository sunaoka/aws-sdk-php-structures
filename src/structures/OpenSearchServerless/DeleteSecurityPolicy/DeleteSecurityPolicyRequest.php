<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'encryption'|'network' $type
 * @property string $name
 * @property string|null $clientToken
 */
class DeleteSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'encryption'|'network',
     *     name: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
