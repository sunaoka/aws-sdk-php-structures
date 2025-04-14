<?php

namespace Sunaoka\Aws\Structures\EntityResolution\PutPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $token
 * @property string $policy
 */
class PutPolicyRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     token?: string|null,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
