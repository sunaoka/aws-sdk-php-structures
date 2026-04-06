<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateEvaluator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $evaluatorName
 * @property string|null $description
 * @property Shapes\EvaluatorConfig $evaluatorConfig
 * @property 'TOOL_CALL'|'TRACE'|'SESSION' $level
 * @property array<string, string>|null $tags
 */
class CreateEvaluatorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     evaluatorName: string,
     *     description?: string|null,
     *     evaluatorConfig: Shapes\EvaluatorConfig,
     *     level: 'TOOL_CALL'|'TRACE'|'SESSION',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
