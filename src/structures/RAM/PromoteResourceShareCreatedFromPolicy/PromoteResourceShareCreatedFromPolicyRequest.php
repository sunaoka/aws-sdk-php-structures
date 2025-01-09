<?php

namespace Sunaoka\Aws\Structures\RAM\PromoteResourceShareCreatedFromPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareArn
 */
class PromoteResourceShareCreatedFromPolicyRequest extends Request
{
    /**
     * @param array{resourceShareArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
