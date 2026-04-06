<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecyclePolicyArn
 */
class GetLifecyclePolicyRequest extends Request
{
    /**
     * @param array{lifecyclePolicyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
