<?php

namespace Sunaoka\Aws\Structures\imagebuilder\PutComponentPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $componentArn
 * @property string $policy
 */
class PutComponentPolicyRequest extends Request
{
    /**
     * @param array{
     *     componentArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
