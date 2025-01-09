<?php

namespace Sunaoka\Aws\Structures\Ses\ListIdentityPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 */
class ListIdentityPoliciesRequest extends Request
{
    /**
     * @param array{Identity: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
