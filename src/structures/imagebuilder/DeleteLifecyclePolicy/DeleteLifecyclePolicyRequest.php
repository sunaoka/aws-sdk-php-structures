<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $lifecyclePolicyArn
 */
class DeleteLifecyclePolicyRequest extends Request
{
    /**
     * @param array{lifecyclePolicyArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
