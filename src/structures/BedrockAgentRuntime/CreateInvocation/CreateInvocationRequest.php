<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\CreateInvocation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $description
 * @property string|null $invocationId
 * @property string $sessionIdentifier
 */
class CreateInvocationRequest extends Request
{
    /**
     * @param array{
     *     description?: string|null,
     *     invocationId?: string|null,
     *     sessionIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
