<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetComponentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentArn
 */
class GetComponentPolicyRequest extends Request
{
    /**
     * @param array{componentArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
