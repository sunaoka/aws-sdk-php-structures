<?php

namespace Sunaoka\Aws\Structures\DLM\GetLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PolicyId
 */
class GetLifecyclePolicyRequest extends Request
{
    /**
     * @param array{PolicyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
