<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LifecyclePolicyIdentifier> $identifiers
 */
class BatchGetLifecyclePolicyRequest extends Request
{
    /**
     * @param array{identifiers: list<Shapes\LifecyclePolicyIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
