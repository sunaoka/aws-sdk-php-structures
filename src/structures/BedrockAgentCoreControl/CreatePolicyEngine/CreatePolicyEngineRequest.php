<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePolicyEngine;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $description
 * @property string|null $clientToken
 */
class CreatePolicyEngineRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
