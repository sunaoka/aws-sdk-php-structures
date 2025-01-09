<?php

namespace Sunaoka\Aws\Structures\Batch\DeleteSchedulingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteSchedulingPolicyRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
