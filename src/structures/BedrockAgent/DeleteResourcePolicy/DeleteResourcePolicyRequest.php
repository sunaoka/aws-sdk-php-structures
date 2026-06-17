<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteResourcePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property string|null $expectedRevisionId
 */
class DeleteResourcePolicyRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     expectedRevisionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
