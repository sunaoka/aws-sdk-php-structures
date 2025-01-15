<?php

namespace Sunaoka\Aws\Structures\Glue\GetResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ResourceArn
 */
class GetResourcePolicyRequest extends Request
{
    /**
     * @param array{ResourceArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
