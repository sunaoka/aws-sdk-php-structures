<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgentVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $orchestrationAIPromptId
 * @property string|null $orchestrationAIGuardrailId
 * @property list<ToolConfiguration>|null $toolConfigurations
 * @property list<MultiAgentConfiguration>|null $multiAgentConfigurations
 * @property string|null $connectInstanceArn
 * @property string|null $locale
 * @property list<JSONDocument>|null $inputSchemas
 * @property list<JSONDocument>|null $outputSchemas
 */
class OrchestrationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     orchestrationAIPromptId?: string|null,
     *     orchestrationAIGuardrailId?: string|null,
     *     toolConfigurations?: list<ToolConfiguration>|null,
     *     multiAgentConfigurations?: list<MultiAgentConfiguration>|null,
     *     connectInstanceArn?: string|null,
     *     locale?: string|null,
     *     inputSchemas?: list<JSONDocument>|null,
     *     outputSchemas?: list<JSONDocument>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
