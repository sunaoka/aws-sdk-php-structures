<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $policy
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     policy: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
