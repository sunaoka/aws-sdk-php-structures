<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\DeleteSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $name
 * @property 'encryption'|'network' $type
 */
class DeleteSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     name: string,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
