<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{resourceArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
