<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\PutResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string $policy
 * @property string|null $expectedRevisionId
 */
class PutResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     policy: string,
     *     expectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
