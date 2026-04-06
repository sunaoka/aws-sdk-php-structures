<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $toolName
 * @property 'MODEL_CONTEXT_PROTOCOL'|'RETURN_TO_CONTROL'|'CONSTANT' $toolType
 * @property string|null $title
 * @property string|null $toolId
 * @property string|null $description
 * @property ToolInstruction|null $instruction
 * @property list<ToolOverrideInputValue>|null $overrideInputValues
 * @property list<ToolOutputFilter>|null $outputFilters
 * @property JSONDocument|null $inputSchema
 * @property JSONDocument|null $outputSchema
 * @property Annotation|null $annotations
 * @property UserInteractionConfiguration|null $userInteractionConfiguration
 */
class ToolConfiguration extends Shape
{
    /**
     * @param array{
     *     toolName: string,
     *     toolType: 'MODEL_CONTEXT_PROTOCOL'|'RETURN_TO_CONTROL'|'CONSTANT',
     *     title?: string|null,
     *     toolId?: string|null,
     *     description?: string|null,
     *     instruction?: ToolInstruction|null,
     *     overrideInputValues?: list<ToolOverrideInputValue>|null,
     *     outputFilters?: list<ToolOutputFilter>|null,
     *     inputSchema?: JSONDocument|null,
     *     outputSchema?: JSONDocument|null,
     *     annotations?: Annotation|null,
     *     userInteractionConfiguration?: UserInteractionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
