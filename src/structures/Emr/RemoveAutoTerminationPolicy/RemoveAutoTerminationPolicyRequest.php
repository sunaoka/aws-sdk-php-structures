<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveAutoTerminationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class RemoveAutoTerminationPolicyRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
