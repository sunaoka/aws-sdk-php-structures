<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateInvocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $invocationId
 * @property string|null $description
 * @property string $sessionIdentifier
 */
class CreateInvocationRequest extends Request
{
    /**
     * @param array{
     *     invocationId?: string|null,
     *     description?: string|null,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
