<?php

namespace Sunaoka\Aws\Structures\CodeBuild\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policy
 * @property string $resourceArn
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     policy: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
