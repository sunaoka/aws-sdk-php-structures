<?php

namespace Sunaoka\Aws\Structures\Emr\GetAutoTerminationPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class GetAutoTerminationPolicyRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
