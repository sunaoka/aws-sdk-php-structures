<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
