<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetFlowTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowTemplateSummary|null $summary
 * @property DefinitionDocument|null $definition
 * @property int|null $validatedNamespaceVersion
 */
class FlowTemplateDescription extends Shape
{
    /**
     * @param array{
     *     summary?: FlowTemplateSummary|null,
     *     definition?: DefinitionDocument|null,
     *     validatedNamespaceVersion?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
