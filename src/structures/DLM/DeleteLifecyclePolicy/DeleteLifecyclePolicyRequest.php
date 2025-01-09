<?php

namespace Sunaoka\Aws\Structures\DLM\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class DeleteLifecyclePolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
