<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property 'encryption'|'network' $type
 */
class GetSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
