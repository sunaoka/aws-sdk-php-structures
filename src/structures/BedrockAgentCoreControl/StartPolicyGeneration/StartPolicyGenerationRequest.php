<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\StartPolicyGeneration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyEngineId
 * @property Shapes\ResourceShape $resource
 * @property Shapes\Content $content
 * @property string $name
 * @property string|null $clientToken
 */
class StartPolicyGenerationRequest extends Request
{
    /**
     * @param array{
     *     policyEngineId: string,
     *     resource: Shapes\ResourceShape,
     *     content: Shapes\Content,
     *     name: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
