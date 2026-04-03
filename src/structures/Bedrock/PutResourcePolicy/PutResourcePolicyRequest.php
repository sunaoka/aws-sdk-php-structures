<?php

namespace Sunaoka\Aws\Structures\Bedrock\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $resourcePolicy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     resourcePolicy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
