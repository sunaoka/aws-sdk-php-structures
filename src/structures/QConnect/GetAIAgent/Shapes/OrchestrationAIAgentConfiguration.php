<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $orchestrationAIPromptId
 * @property string|null $orchestrationAIGuardrailId
 * @property list<ToolConfiguration>|null $toolConfigurations
 * @property string|null $connectInstanceArn
 * @property string|null $locale
 */
class OrchestrationAIAgentConfiguration extends Shape
{
    /**
     * @param array{
     *     orchestrationAIPromptId: string,
     *     orchestrationAIGuardrailId?: string|null,
     *     toolConfigurations?: list<ToolConfiguration>|null,
     *     connectInstanceArn?: string|null,
     *     locale?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
