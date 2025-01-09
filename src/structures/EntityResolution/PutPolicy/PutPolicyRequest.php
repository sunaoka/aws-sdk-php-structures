<?php

namespace Sunaoka\Aws\Structures\EntityResolution\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string $policy
 * @property string $token
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     policy: string,
     *     token?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
