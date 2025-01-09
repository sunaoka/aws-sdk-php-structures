<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTemplateSummary $summary
 * @property DefinitionDocument $definition
 * @property int $validatedNamespaceVersion
 */
class FlowTemplateDescription extends Shape
{
    /**
     * @param array{
     *     summary?: FlowTemplateSummary,
     *     definition?: DefinitionDocument,
     *     validatedNamespaceVersion?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
