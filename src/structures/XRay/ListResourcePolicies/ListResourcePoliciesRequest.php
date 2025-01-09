<?php

namespace Sunaoka\Aws\Structures\XRay\ListResourcePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 */
class ListResourcePoliciesRequest extends Request
{
    /**
     * @param array{NextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
