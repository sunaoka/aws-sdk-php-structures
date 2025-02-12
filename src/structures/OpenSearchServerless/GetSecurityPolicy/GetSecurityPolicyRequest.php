<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\GetSecurityPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'encryption'|'network' $type
 * @property string $name
 */
class GetSecurityPolicyRequest extends Request
{
    /**
     * @param array{
     *     type: 'encryption'|'network',
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
