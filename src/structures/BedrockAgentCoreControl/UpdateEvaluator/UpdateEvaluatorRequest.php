<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateEvaluator;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $evaluatorId
 * @property string|null $description
 * @property Shapes\EvaluatorConfig|null $evaluatorConfig
 * @property 'TOOL_CALL'|'TRACE'|'SESSION'|null $level
 */
class UpdateEvaluatorRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     evaluatorId: string,
     *     description?: string|null,
     *     evaluatorConfig?: Shapes\EvaluatorConfig|null,
     *     level?: 'TOOL_CALL'|'TRACE'|'SESSION'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
