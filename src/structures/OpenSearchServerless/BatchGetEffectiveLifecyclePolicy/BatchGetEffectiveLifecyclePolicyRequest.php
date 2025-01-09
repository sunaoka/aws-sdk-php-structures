<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetEffectiveLifecyclePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\LifecyclePolicyResourceIdentifier> $resourceIdentifiers
 */
class BatchGetEffectiveLifecyclePolicyRequest extends Request
{
    /**
     * @param array{resourceIdentifiers: list<Shapes\LifecyclePolicyResourceIdentifier>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
